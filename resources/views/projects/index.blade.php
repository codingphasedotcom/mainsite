@extends('layouts.backend')

@section('content')

<section class="">

  <div class="col-md-12">
    <div class="filters">
      <div class="option">
        <h5>Type</h5>
        <select class="" name="">
          @foreach ($projectTypes as $type)
          <option value="{{$type->id}}">{{$type->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="option">
        <h5>Open Positions</h5>
        <select class="" name="">
          <option value="">All</option>
          <option value="">Front End</option>
          <option value="">Backend</option>
          <option value="">Designer</option>
        </select>
      </div>

      <div class="option">
        <h5>Type</h5>
        <div class="btn btn-primary">
          <a href="{{ route('projects.create') }}">button</a>
        </div>
      </div>
    </div>
  </div>


    <div class="col-md-12">
      <div class="content-box">
      <table class="table-style">
        <thead>
          <tr>
            <th>
              <input type="checkbox" id="cbox1" value="first_checkbox">
            </th>
            <th colspan="5">
              Title
            </th>
            <th>
              Category
            </th>
            <th>
              Type
            </th>
            <th>
              Members
            </th>
            <th>
              Created By
            </th>
          </tr>
        </thead>
        <tbody>
{{$test}}
          @foreach ($projects as $project)
          <tr>
            <td>
              <input type="checkbox" id="cbox1" value="first_checkbox">
            </td>
            <td colspan="5">
              <a href="/projects/{{$project->id}}">{{ $project->title }}</a>
            </td>
            <td >
              {{ $project->type->name }}
            </td>
            <td >
              {{ $project->type->name }}
            </td>
            <td>
              2
            </td>
            <td>
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/marcosmoralez/128.jpg" class="userimg" />
              <span class="username">jay300</span>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
      </div>
    </div>

    {{-- <div class="col-md-4">
      <div class="content-box">
      box area
      </div>
    </div>

    <div class="col-md-4">
      <div class="content-box">
      box area
      </div>
    </div>

    <div class="col-md-4">
      <div class="content-box">
      box area
      </div>
    </div> --}}



</section>

@endsection
