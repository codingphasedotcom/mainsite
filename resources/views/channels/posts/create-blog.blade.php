@extends('layouts.app')

@section('content')
<div id="channels">
  <div class="container">

    <div class="row">

      <div class="col-sm-3">
        <center>
          @include('includes/sideAds')


        </center>
      </div>
      <div class="col-sm-9">
        <div class="content-box">
          <form action="/channels/submit" method="POST">
            {{ csrf_field() }}
          <!-- Main content -->
          <section class="content">
            <div class="row">

              <div class="col-md-offset-1 col-md-10">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Create Posts</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title">Posts Title</label>
                          <input type="text" class="form-control" id="title" placeholder="title" value="{{ old('title') }}" name="title" >
                          @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description">Description</label>
                          <textarea type="text" class="form-control" id="description" placeholder="description" name="description">{{ old('description') }}</textarea>
                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group{{ $errors->has('logo_img') ? ' has-error' : '' }}">
                          <label for="logo_img">Logo URL</label>
                          <input type="text" class="form-control" id="logo_img" placeholder="Enter Image URL"  value="{{ old('logo_img') }}" name="logo_img">
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('logo_img') }}</strong>
                              </span>
                          @endif
                        </div>

                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
              </div>

            </div>
            <!-- /.row -->
          </section>

        </form>




        </div>

      </div>

    </div>

  </div>
</div>


@endsection


@section('scripts')
<script>

$.ajax('http://opengraph.io/api/1.0/site/http%3A%2F%2Fwww.washingtontimes.com%2F')
  .done(function(data){
    console.log(data);
  });
</script>
@endsection
