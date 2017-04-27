@extends('layouts.app')

@section('content')
<div id="channels">
  <div class="container">

    <div id="posts" class="row">

      <div class="col-md-3">
        <center>
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- responsive -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-1876888588409540"
               data-ad-slot="6100356041"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>


        </center>
      </div>
      <div class="col-md-9">
        <div class="content-box">
          <div class="filter-section">
            <div class="row">
              <div class="col-xs-8 col-md-9">
                <div class="col-xs-6 filter-dropdown">
                  Popular <i class="fa fa-sort-desc" aria-hidden="true"></i>
                </div>
                <div class="col-xs-6 filter-dropdown">
                  Rising <i class="fa fa-line-chart" aria-hidden="true"></i>

                </div>
              </div>
              <div class="col-xs-4 col-md-3">
                <a href="/channels/submit" class="add-btn">
                  Post
                </a>
              </div>
            </div>
          </div>
        </div>





        <div class="content-box post-box post">
          <div class="user-info">
            <div class="user-img">
              <i class="fa fa-bolt" aria-hidden="true"></i>
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg"/>

            </div>
            <div class="user-name">Johny Dang</div>
            <div class="user-stats">
              <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
              <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
            </div>
          </div>
          <div class="user-post post">
            <h2>Another Bullshit Blog</h2>
            <p>Notes
Over the course of time, the Flexbox syntax has changed. If you browse the web for Flexbox articles, you may stumble across articles that use a syntax that’s different from the one used in this entry. Some articles may still be using the old syntax. The syntax used in this entry is the new/latest syntax.
As you can see in the browser compatibility table, some older versions of browsers used to support the old syntax. Depending on how many browser versions you want to support, you may need to use both the old and the new Flexbox syntax.
If you want to learn more about using the older and newer syntax for wider/older browser support, you can read Advanced Cross-Browser Flexbox at the Dev.Opera Blog.</p>
  <div class="post-buttons">
    <div class="more-btn">
      View More
    </div>
    <div class="comment-btn">
      Comment
    </div>
  </div>
          </div>
        </div>



        <div class="content-box post-box link">
          <div class="user-info">
            <div class="user-img">
              <i class="fa fa-bolt" aria-hidden="true"></i>
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg"/>

            </div>
            <div class="user-name">Johny Dang</div>
            <div class="user-stats">
              <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
              <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
            </div>
          </div>
          <div class="user-post post">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
            </div>
          </div>
        </div>


        <div class="content-box post-box question">
          <div class="user-info">
            <div class="user-img">
              <i class="fa fa-bolt" aria-hidden="true"></i>
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg"/>

            </div>
            <div class="user-name">Johny Dang</div>
            <div class="user-stats">
              <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
              <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
            </div>
          </div>
          <div class="user-post post">
            <h2>How to setup Node JS?</h2>
          </div>
        </div>







      </div>
    </div>

  </div>
</div>
@endsection
