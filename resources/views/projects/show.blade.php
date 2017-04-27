@extends('layouts.backend')

@section('content')

<section class="project-show">
  <div class="col-md-12">
    <div class="content-box">


      <div class="col-md-9 area">
      <h1>{{ $project->title }}</h1>
      <h6>Date: 1/2/17</h6>
      <p>{{ $project->description }}</p>

      </div>
      <div class="col-md-3 members">
        <div class="button">
          Join
        </div>
        <hr>
        <div class="member-area">
          <div class="row member">
            <div class="profile col-md-3">
              <img src="https://pbs.twimg.com/profile_images/527584017189982208/l3wwN-l-_400x400.jpeg" alt="">

            </div>
            <div class="name col-md-9">
              <h5>James342</h4>
            </div>
          </div>



        </div>
      </div>

    </div>

  </div>
</section>

@endsection
