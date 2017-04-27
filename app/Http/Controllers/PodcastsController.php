<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podcast;

class PodcastsController extends Controller
{
    public function index(){

      $podcasts = Podcast::all()->sortByDesc('created_at');
      // $podcasts = DB::table('events')->orderBy('created_at', 'desc')->get();


      return view('podcasts/index', compact('podcasts'));
    }
}
