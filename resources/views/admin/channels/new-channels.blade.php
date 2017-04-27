@extends('layouts.admin')

@section('content')
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New podcast
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/podcasts"><i class="fa fa-dashboard"></i> podcasts</a></li>
        <li class="active">New podcast</li>
      </ol>
    </section>

    <form action="/channels/submit" method="POST">
      {{ csrf_field() }}
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-9">

          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Submit to Add New Channel</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">

                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Channel Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter email" value="{{ old('title') }}" name="title" >
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter email" name="description">{{ old('description') }}</textarea>
                    @if ($errors->has('name'))
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
    <!-- /.content -->






  </div>







@endsection
