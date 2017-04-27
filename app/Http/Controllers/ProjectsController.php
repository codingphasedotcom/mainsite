<?php

namespace App\Http\Controllers;

use App\Project;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\ProjectType;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index()
     {
      //  $test = Project::find(1)->user(1)->first();
      //  return $test;

      //  $projects = DB::table('projects')->paginate(10);
       $projects = Project::where('owner_id',Auth::user()->id)->paginate(10);
      // $projects = Project::all();
       $projectTypes = ProjectType::all();
       $test = Project::find(1)->type->name;
        // dd($test);
         return view('projects/index', compact('projects', 'projectTypes', 'test'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectTypes = ProjectType::all();
        return view('projects/new', compact('projectTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $project = new Project;

        //create new post
        $project->title = request('title');
        $project->description = request('description');
        $project->type_id = request('type');
        $project->owner_id =  Auth::user()->id;

        $project->save();
        // $project->users()->attach(Auth::user()->id);

        return redirect('/projects');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        
        return view('/projects/show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
