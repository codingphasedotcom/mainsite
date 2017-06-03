@extends('layouts.admin')

@section('content')
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New skill
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/skills"><i class="fa fa-dashboard"></i> skills</a></li>
        <li class="active">New skill</li>
      </ol>
    </section>

    <form action="/admin/skills" method="POST">
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
                    <label for="bg_img">Background Image</label>
                    <input type="text" class="form-control" id="bg_img" placeholder="Enter Image URL" name="bg_img">
                  </div>

                  <div class="form-group">
                    <label for="slug">slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="URL" name="slug">
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
