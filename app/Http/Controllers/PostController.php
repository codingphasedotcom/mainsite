<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Channel;
use App\Comment;
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
      $channelData = Channel::where('slug', '=', $channel)->first();

      return view('channels/posts/create-blog', compact('channel', 'channelData'));

    }
    public function newlink($channel)
    {

      $channelData = Channel::where('slug', '=', $channel)->first();

      return view('channels/posts/create-link', compact('channel', 'channelData'));
    }

    public function newquestion($channel)
    {

      $channelData = Channel::where('slug', '=', $channel)->first();

      return view('channels/posts/create-question', compact('channel', 'channelData'));
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




      switch (request('ctype')) {
        case 1:
        $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'description' => 'required',
        'link_url' => 'required|unique:posts'
      ]);

        // GET Link Image and info
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
            //create new post
            $post->title = request('title');
            $post->description = request('description');
            $post->link_url = $request->link_url;
            $post->slug = $slug;
            $post->channel_id =  request('cnum');
            // if image is not on sites meta then use the default
            if(isset($metadatas["og:image"])){
              $post->image_url =  $metadatas["og:image"];
            } else {
              $post->image_url =  '/img/post-no-img.png';
            }

            $post->post_type_id =  request('ctype');
            $post->user_id =  Auth::user()->id;
            // $post->approved =  1;
            break;
        case 2:
        $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'description' => 'required',
        ]);
          // return "BLOG";
          // return "GOT HERE";
            $post->title = request('title');
            $post->description = request('description');
            $post->image_url = $request->image_url;
            $post->slug = $slug;
            $post->channel_id =  request('cnum');
            $post->post_type_id =  request('ctype');
            $post->user_id =  Auth::user()->id;
            break;
        case 3:
            $this->validate($request, [
              'description' => 'required',
            ]);
        // return "got here";
            $post->title = request('title');
            $post->description = request('description');
            $post->slug = $slug;
            $post->channel_id =  request('cnum');
            $post->post_type_id =  request('ctype');
            $post->user_id =  Auth::user()->id;
            
        break;
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
    public function show($channel, $post)
    {
        $post = Post::where('slug', '=', $post)->first();

        $comments = Comment::where('post_id', '=', $post->id)->orderBy('created_at', 'desc')->paginate(20);

        $channelData = Channel::where('slug', '=', $channel)->first();

        return view('channels/posts/show-posts', compact('channel', 'post', 'channelData', 'comments'));
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
