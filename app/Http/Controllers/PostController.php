<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
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
      $posts = Post::where('slug', '=', $channel);

      return view('channels/posts/all-posts', compact('posts', 'channel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newblog($channel)
    {

      return view('channels/posts/create-blog', compact('channel'));
    }
    public function newlink($channel)
    {

      return view('channels/posts/create-link', compact('channel'));
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
      $metadatas;

      libxml_use_internal_errors(true);
        $doc = new DomDocument();
        $doc->loadHTML(file_get_contents('https://www.lullabot.com/articles/flow-for-static-type-checking-javascript'));
        $xpath = new DOMXPath($doc);
        $query = '//*/meta[starts-with(@property, \'og:\')]';
        $metas = $xpath->query($query);
        foreach ($metas as $meta) {

            $property = $meta->getAttribute('property');
            $content = $meta->getAttribute('content');
            echo '<h1>Meta '.$property.' <span>'.$content.'</span></h1>';
            $metadatas[$property] = $content;

            echo $content;
    }
    dd($metadatas);
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
