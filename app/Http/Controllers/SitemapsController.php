<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sitemap;
use App\Post;
use App\Channel;

class SitemapsController extends Controller
{
    public function index()
    {
        // Get a general sitemap.
        Sitemap::addSitemap('/sitemaps/general');

        // You can use the route helpers too.
        // Sitemap::addSitemap(route('channels'));

        // Return the sitemap to the client.
        return Sitemap::index();
    }

    public function posts()
    {
        $posts = Post::all();
    //     $channelData = Channel::where('slug', '=', $channel)->first();

    //   $posts = Post::where('channel_id', '=', $channelData->id)->orderBy('created_at', 'desc')->paginate(10);

        foreach ($posts as $post) {
            Sitemap::addTag("/channels/{$post->channel->slug}/{$post->slug}", $post->updated_at, 'daily', '0.8');
        }

        return Sitemap::render();
    }
}
