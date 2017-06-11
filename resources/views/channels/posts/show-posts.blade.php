@extends('layouts.app')

@section('content')
<div id="channels">
  <div >

    <div id="posts" class="row">

      <div class="col-md-3 col-lg-3">
        <center>
          @include('includes/sideAds')


        </center>
      </div>
      <div class="col-md-9 col-lg-8">
        
        <div class="">
       
          <div class="col-md-12">
           <div class="content-box post-box question">
            <div class="user-info">
              <div class="user-img">
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg"/>

              </div>
              <div class="user-name">{{ $post->user->username}}</div>
              <div class="user-stats">
                <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
              </div>
            </div>
            <div class="user-post post">
              <h2><a href="/channels/{{ $channel }}/{{ $post->slug }}">
              <strong>Q&A:</strong> {{ $post->title }}
              </a></h2>
                <div class="post-buttons">
                  <a href="{{ $post->link_url }}" target="new" >
                    <div class="more-btn">
                      View More
                    </div>
                  </a>
                  <div class="comment-btn">
                    Comment
                  </div>
                </div>
            </div>
          </div>
          </div>

          

        </div>

        <div class="content-box post-box post">
        
          <center>
            @include('includes/sideAds')
          </center>
        </div>

        


      </div>
    </div>

  </div>
</div>
@endsection
