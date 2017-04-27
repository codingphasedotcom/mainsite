@extends('layouts.admin')

@section('content')
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Channels
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/channels"><i class="fa fa-dashboard"></i> channels</a></li>
        <li class="active">New channel</li>
      </ol>
    </section>

    <form action="/admin/channels" method="POST">
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
                  <th style="width: 40px">Status</th>
                </tr>
                @foreach ($channels as $channel)
                <tr>
                  <td>1.</td>
                  <td><a href="/admin/channels/{{$channel->id}}/edit">{{ $channel->title }}</a></td>

                  <td>
                    <span class="badge {{ ($channel->approved == 1) ? 'bg-green' : 'bg-red'}}">
                    {{ ($channel->approved == 1) ? 'Approved' : 'pending'}}
                  </span></td>
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
