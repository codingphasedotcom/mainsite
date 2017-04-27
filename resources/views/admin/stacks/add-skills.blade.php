@extends('layouts.admin')

@section('content')
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Stack
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/stacks"><i class="fa fa-dashboard"></i> Stacks</a></li>
        <li class="active">New Stack</li>
      </ol>
    </section>

    <form action="/admin/stacks/{{$stack->id}}" method="POST">
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
                  

                  <div class="form-group">
                    <a href="#" class="add-skills btn btn-block btn-info" data-toggle="modal" data-target=".add-skills-modal">
                      Add Skill
                    </a>

                    <select name="skill_list[]" class="skill-list form-control"  multiple="multiple">
                      @foreach ($skills as $skill)
                        <option value="{{$skill->id}}">{{$skill->title}}</option>
                      @endforeach
                    </select>

                    <!-- Button trigger modal -->

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
