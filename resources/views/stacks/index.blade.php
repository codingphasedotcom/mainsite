@extends('layouts.app')

@section('content')
<div id="stacks">
  <div class="container">

    <div class="row">

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
          <div class="row">

            <div class="col-md-12">
              <div class="bread-crumbs">
                Stacks
              </div>
            </div>




            @foreach ($stacks as $stack)
              <div class="col-md-6">
                <a href="/stacks/{{$stack->id}}">
                <div class="stacks-box" style="
  background: -moz-linear-gradient(top, rgba(91,29,232,0.85) 0%, rgba(38,0,107,0.85) 100%), url({{$stack->bg_img}});
  background: -webkit-linear-gradient(top, rgba(91,29,232,0.85) 0%,rgba(38,0,107,0.85) 100%), url({{$stack->bg_img}});
  background-image: linear-gradient(to bottom, rgba(91,29,232,0.85) 0%,rgba(38,0,107,0.85) 100%), url({{$stack->bg_img}});
        background-position: center;
        background-size: cover;
    ">
                  <div class="title">
                    {{ $stack->title }}
                  </div>
                  <div class="stats">
                    <div class="row">

                      <div class="col-xs-6">
                        <div class="number">
                          10/200
                        </div>
                        <div class="name">
                          Users
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="number">
                          10/200
                        </div>
                        <div class="name">
                          Completed
                        </div>
                      </div>
                  </div>
                </div>
                </div>
                </a>
              </div>






          @endforeach



          </div>
        </div>

      </div>

    </div>

  </div>
</div>
@endsection
