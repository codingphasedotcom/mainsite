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

    <form action="/admin/podcasts" method="POST">
      {{ csrf_field() }}
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-9">

          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Quick Example</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter email" name="title">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter email" name="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="youtube_id">Youtube ID</label>
                    <input type="text" class="form-control" id="youtube_id" placeholder="Enter Image URL" name="youtube_id">
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
