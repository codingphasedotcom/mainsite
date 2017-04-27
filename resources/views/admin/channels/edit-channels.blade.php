@extends('layouts.admin')

@section('content')
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New channel
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/channels"><i class="fa fa-dashboard"></i> channels</a></li>
        <li class="active">New channel</li>
      </ol>
    </section>

    <form action="/admin/channels/{{$channel->id}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
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
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Channel Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter email" value="{{ $channel->title}}" name="title" >
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter email" name="description">{{ $channel->description }}</textarea>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('logo_img') ? ' has-error' : '' }}">
                    <label for="logo_img">Logo URL</label>
                    <input type="text" class="form-control" id="logo_img" placeholder="Enter Image URL"  value="{{ $channel->logo_img }}" name="logo_img">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo_img') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('submitted_id') ? ' has-error' : '' }}">
                    <label for="logo_img">Submitted By (UserId)</label>
                    <input type="text" class="form-control" id="submitted_id" placeholder="Enter Image URL"  value="{{ $channel->submitted_id }}" name="submitted_id">
                    @if ($errors->has('submitted_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo_img') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('approved') ? ' has-error' : '' }}">
                    <label for="logo_img">Status</label>
                    <select class="form-control" name="approved">
                      @if ($channel->approved)
                        <option value="1" selceted>Approved</option>
                        <option value="0">Pending</option>
                      @else
                        <option value="1">Approved</option>
                        <option value="0" selected>Pending</option>
                      @endif
                    </select>
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

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>


<script>
  var allSkills;





  $(".skill-list").select2({
      placeholder: "Select a skill",
      allowClear: true
    });
</script>


  <script>
  $('.modal-primary').on('shown.bs.modal', function () {
  $('.add-skills').focus()
  })
  </script>
@endsection
