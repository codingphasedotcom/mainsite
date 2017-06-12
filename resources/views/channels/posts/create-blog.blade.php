@extends('layouts.app')

@section('top')
<link rel="stylesheet" type="text/css" href="https://cdn.ckeditor.com/4.5.7/standard/skins/moono/editor.css?t=G14E">
<script src="/adminlte/plugins/ckeditor/ckeditor.js"> </script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.7/standard/config.js?t=G14E"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.7/standard/styles.js?t=G14E"></script>
@endsection

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
          <form action="/channels/{{$channel}}/submit" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $channelData->id }}" name="cnum" >
            <input type="hidden" value="2" name="ctype" >
            
            
          <!-- Main content -->
          <section class="content">
            <div class="row">

              <div class="col-md-offset-1 col-md-10">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Create Link</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                      <div class="box-body">
                      
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                          <label for="title">Link Title</label>
                          <input type="text" class="form-control" id="title" placeholder="title" value="{{ old('title') }}" name="title" >
                          @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description">Short Description</label>
                          <textarea  type="text" class="form-control" id="description" placeholder="description" name="description">{{ old('description') }}</textarea>
                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                          <label for="image_url">Link URL</label>
                          <input type="text" class="form-control" id="image_url" placeholder="Enter Image URL"  value="{{ old('image_url') }}" name="image_url">
                          @if ($errors->has('image_url'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('image_url') }}</strong>
                              </span>
                          @endif
                        </div>

                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
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

 // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
  </script>

@endsection
