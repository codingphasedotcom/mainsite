<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Channel;
use Auth;
use DomDocument;
use DOMXPath;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($channel)
    {
      $channelData = Channel::where('slug', '=', $channel)->first();

      $posts = Post::where('channel_id', '=', $channelData->id)->orderBy('created_at', 'desc')->paginate(10);

      // return $posts;

      return view('channels/posts/all-posts', compact('posts', 'channel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newblog($channel)
    {
      $posts = Post::where('slug', '=', $channel);

      return view('channels/posts/create-blog', compact('channel'));
    }
    public function newlink($channel)
    {

      $channelData = Channel::where('slug', '=', $channel)->first();

      return view('channels/posts/create-link', compact('channel', 'channelData'));
    }

    public function newquestion($channel)
    {

      return view('channels/posts/create-question', compact('channel'));
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
      $post = new Post;

      $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'description' => 'required',
        'link_url' => 'required|unique:posts'
      ]);

      $metadatas;

        libxml_use_internal_errors(true);
          $doc = new DomDocument();
          $doc->loadHTML(file_get_contents(request('link_url')));
          $xpath = new DOMXPath($doc);
          $query = '//*/meta[starts-with(@property, \'og:\')]';
          $metas = $xpath->query($query);
          foreach ($metas as $meta) {

              $property = $meta->getAttribute('property');
              $content = $meta->getAttribute('content');
              // echo '<h1>Meta '.$property.' <span>'.$content.'</span></h1>';
              $metadatas[$property] = $content;

              // echo $content;
      }
      // return $request->all();

      if(request('ctype') == 1){
        //create new post
        $post->title = request('title');
        $post->description = request('description');
        $post->link_url = $request->link_url;
        $post->slug = $slug;
        $post->channel_id =  request('cnum');
        $post->image_url =  $metadatas["og:image"];
        $post->post_type_id =  request('ctype');
        $post->user_id =  Auth::user()->id;
        // $post->approved =  1;
      }


      // dd($metadatas["og:image"]);


      // return
      $post->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
