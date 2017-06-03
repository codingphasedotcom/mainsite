<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Channel;
use Auth;

class ChannelController extends Controller
{

      public function index()
      {
        $channels = Channel::all();


          return view('admin/channels/all-channels', compact('channels'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('channels/submit');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
                $slug = request('title');
                // replace non letter or digits by -
                $slug = preg_replace('~[^\pL\d]+~u', '-', $slug);

                // transliterate
                $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);

                // remove unwanted characters
                $slug = preg_replace('~[^-\w]+~', '', $slug);

                // trim
                $slug = trim($slug, '-');

                // remove duplicate -
                $slug = preg_replace('~-+~', '-', $slug);

                // lowercase
                $slug = strtolower($slug);

                if (empty($slug)) {
                return 'n-a';
                }

                $channel = new Channel;

                //create new post
                $channel->title = request('title');
                $channel->description = request('description');
                $channel->logo_img = request('logo_img');
                $channel->slug = $slug;
                $channel->submitted_id =  Auth::user()->id;
                $channel->approved =  0;

                $channel->save();
                // $channel->users()->attach(Auth::user()->id);

                return redirect('/channels');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          return view('admin/channels/view-channels');
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $channel = Channel::find($id);


          return view('admin/channels/edit-channels', compact('channel'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {
        $slug = request('title');
        // replace non letter or digits by -
        $slug = preg_replace('~[^\pL\d]+~u', '-', $slug);

        // transliterate
        $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);

        // remove unwanted characters
        $slug = preg_replace('~[^-\w]+~', '', $slug);

        // trim
        $slug = trim($slug, '-');

        // remove duplicate -
        $slug = preg_replace('~-+~', '-', $slug);

        // lowercase
        $slug = strtolower($slug);

        if (empty($slug)) {
        return 'n-a';
        }

        $post = [
          'title' => request('title'),
          'description' => request('description'),
          'logo_img' => request('logo_img'),
          'slug' => $slug,
          'submitted_id' =>  Auth::user()->id,
          'approved' => request('approved')
        ];

        $channel = Channel::find($id);

        $channel->update($post);

        return back()->withInput();
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          //
      }

}
