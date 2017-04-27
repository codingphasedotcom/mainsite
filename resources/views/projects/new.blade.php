@extends('layouts.backend')

@section('content')
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">New Project</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('projects.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="email" class="form-control" name="description" value="{{ old('description') }}" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                              <select class="" name="type" class="form-control">
                                @foreach ($projectTypes as $type)
                                <option value="{{$type->id}}">{{$type->name}} </option>
                                @endforeach
                              </select>
                              @if ($errors->has('type'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('type') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
