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
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">id</th>
                  <th>Title</th>
                  <th>Users Enrolled</th>
                  <th style="width: 40px">Updated</th>
                </tr>
                @foreach ($skills as $skill)
                <tr>
                  <td>1.</td>
                  <td><a href="admin/skills/{{$skill->id}}">{{ $skill->title }}</a></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
              @endforeach

              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>

  </form>
    <!-- /.content -->
  </div>







@endsection
