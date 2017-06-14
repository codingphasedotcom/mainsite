<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\User;
use Auth;

class RelationshipsController extends Controller
{
    public function followChannel(request $request, $channel) {
        $channel = Channel::where('slug', '=', $channel)->first();
        $userId = Auth::user()->id;
        $exists = $channel->users->contains($userId);


        if(!$exists){
            
            $channel->users()->attach($userId);
            $channel->users;
            
            $user = User::find($userId);
            // return "{$user->username}  just followed ";
            return back();
        } else {
            $user = User::find($userId);
           
            $channel->users()->detach($userId);
            //  return "{$user->username}  just Un-followed ";
            return back();
        }

        

        
        
        // return ;
    }
}
