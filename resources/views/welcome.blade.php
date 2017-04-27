@extends('layouts.app')

@section('content')

      <section id="jumbo">
        <div class="row">

        <div class="col-md-6">
          <img src="{{url('/img/logowhite.png')}}"  class="logoimg"/>

        </div>
        <div class="col-md-6">

          <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//codingphase.us15.list-manage.com/subscribe/post?u=2c5c7b5f66dcf133601993b0c&amp;id=2b92b71af8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Enter your info for a free Udemy Course</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-YOUTUBE">Youtube Username  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="YOUTUBE" class="required" id="mce-YOUTUBE">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group input-group">
    <strong>Interested On </strong>
    <ul><li><input type="checkbox" value="1" name="group[467][1]" id="mce-group[467]-467-0"><label for="mce-group[467]-467-0">Front-End</label></li>
<li><input type="checkbox" value="2" name="group[467][2]" id="mce-group[467]-467-1"><label for="mce-group[467]-467-1">Back-End</label></li>
<li><input type="checkbox" value="4" name="group[467][4]" id="mce-group[467]-467-2"><label for="mce-group[467]-467-2">Don't Know Yet</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2c5c7b5f66dcf133601993b0c_2b92b71af8" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[3]='YOUTUBE';ftypes[3]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<!--End mc_embed_signup-->
        </div>

        </div>
      </section>

      <div class="backAtIt">
        <h3>Back at it again</h3>
        <p>Join a community where the sky is the limit, we strive for greatness and nothing is more important to us than to help the next guy. We have each others back at all times and always learn from each others mistakes. </p>
      </div>

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



      </section>


<script src="http://localhost:8080/js/bundle.js"></script>
  @endsection
