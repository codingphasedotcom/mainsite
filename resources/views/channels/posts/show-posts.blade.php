@extends('layouts.app') @section('content')
<div id="channels">
  <div>

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

                  @if (isset($post->user->user_img))
                    <img src="{{ $post->user->user_img }}" />
                  @else 
                    <img src="/img/defaults/user-no-img.png" />
                  @endif
                  

                </div>
                <div class="user-name">{{ $post->user->username}}</div>
                <div class="user-stats">
                  <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                  <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
                </div>
              </div>
              <div class="user-post post">
                <h2><a href="/channels/{{ $channel }}/{{ $post->slug }}">
              <strong>
                @if ($post->post_type_id == 1 )
                Link:
                @elseif ( $post->post_type_id == 2 )
                Blog:
                @else 
                Q&A:
                @endif
              </strong> 
                {{ $post->title }}
                </a>
                </h2>
                <a href="{{ $post->link_url }}" target="new" >
                  <div class=""
                  style="background: url({{ $post->image_url }}) no-repeat center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;height: 250px;"></div>
                </a>
              </div>
            </div>
            </div>
            </div>

            <div class="col-md-8">
              <div class="content-box post-box comment">
                <form action="/channels/{{$post->channel->slug}}/{{$post->slug}}/comment" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="pi" value="{{ $post->id }}">
                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Comment</label>
                    <textarea type="text" class="form-control" id="description" placeholder="leave a respectful comment...." name="description">{{ old('description') }}</textarea>                  
                      @if ($errors->has('description'))
                      <span class="help-block">
                        <strong>
                          {{ $errors->first('description') }}
                          </strong>
                      </span> 
                      @endif
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              @foreach ($comments as $comment)
                <div class="content-box post-box question">
                  <div class="user-info">
                    <div class="user-img">
                      <i class="fa fa-bolt" aria-hidden="true"></i>
                      @if (isset($comment->user->user_img))
                        <img src="{{ $comment->user->user_img }}" />
                      @else 
                        <img src="/img/default/user-no-img.png" />
                      @endif

                    </div>
                    <div class="user-name">{{ $comment->user->username}}</div>
                    <div class="user-stats">
                      <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                      <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="user-post post">
                    <p>
                      {{ $comment->description }}
                    </p>
                  </div>
                </div>
              @endforeach
              
              <center>
                {{ $comments->links() }}
              </center>
            </div>
            <div class="col-md-4">
              <div class="content-box post-box question">
                <center>
                  @include('includes/sideAds')
                </center>
                </div>
            </div>


            </div>

        
    </div>
  </div>

</div>
</div>
@endsection