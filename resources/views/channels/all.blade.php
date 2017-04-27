@extends('layouts.app')

@section('content')
<div id="channels">
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
          <div class="filter-section">
            <div class="row">
              <div class="col-xs-9 col-md-9">
                <div class="filter-dropdown">
                  Popular <i class="fa fa-sort-desc" aria-hidden="true"></i>
                </div>
                <div class="filter-dropdown">
                  Rising <i class="fa fa-line-chart" aria-hidden="true"></i>

                </div>
              </div>
              <div class="col-xs-3 col-md-3">
                <a href="/channels/submit" class="add-btn">
                  Add Channel
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($channels as $channel)

            <div class="col-xs-6 col-md-3">
              <div class="channel">

                <a href="/channels/{{$channel->permalink}}">
                  <div class="circle spin-circle" style="background-image: linear-gradient(135deg,rgba(181,18,18,.2) 0,#002d77 100%),url({{$channel->logo_img}});
    background-position: center;
    background-size: cover;">
                  <div class="letter">
                    @php
                      echo substr($channel->title,0)
                    @endphp

                  </div>
                </div>
                </a>
                <div class="channel-title">{{ $channel->title }}</div>
                <a href="#" class="follow-btn">
                  Follow
                </a>
              </div>
            </div>

          @endforeach




          </div>




        </div>

      </div>

    </div>

  </div>
</div>
@endsection
