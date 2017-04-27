<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Podcast;
use Auth;

class PodcastsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $podcasts = Podcast::all();

         return view('admin/podcasts/all-podcasts', compact('podcasts'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {

         return view('admin/podcasts/new-podcasts');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       $podcast = new Podcast;

       //create new post
       $podcast->title = request('title');
       $podcast->description = request('description');
       $podcast->user_id =  Auth::user()->id;
       $podcast->youtube_id = request('youtube_id');

       $podcast->save();

         return redirect('admin/podcasts');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $podcast = Podcast::find($id);

         return view('admin/podcasts/show-podcasts', compact('podcast'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $podcast = Podcast::find($id);

         return view('admin/podcasts/edit-podcasts', compact('podcast'));
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
       $podcast = Podcast::find($id);

       $podcast->update($request->all());

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
