@extends('layouts.app')

@section('content')

      <section id="jumbo">
        <div class="row">
          <div class="col-md-offset-6 backAtIt">
            <h2>A Play Ground Full of Resources</h2>
            <p>Join a community where the sky is the limit, we strive for greatness and nothing is more important to us than to help the next guy. Our goal is to make your transition as developer just a little bit easier.</p>

            <a href="#" class="join" >Join</a>
          </div>

        {{-- <div class="col-md-6">
          <img src="{{url('/img/logowhite.png')}}"  class="logoimg"/>

        </div> --}}


        </div>
        <center>

        <div class="support-box">
          <div class="col-md-8">
            <p>Love the community help keep it stay alive and buy us a cup of coffee</p>
          </div>

          <div class="col-md-4">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WAYR7GSEHQZM4" class="donate-btn">Donate</a>
          </div>


        </div>

      </center>
      </section>


{{--
      <section id="videos" >
        <div class="row">
          <div class="col-md-9">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe  src="https://www.youtube.com/embed/hMRXaRiQnjk?list=UU46wWUso9H5KPQcoL9iE3Ug" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-3">
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
          </div>


      </div>



      </section> --}}





<script src="http://localhost:8080/js/bundle.js"></script>
  @endsection
