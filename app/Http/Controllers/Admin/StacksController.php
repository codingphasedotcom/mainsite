<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Stack;
use App\Skill;

class StacksController extends Controller
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
      $stacks = Stack::all();


        return view('admin/stacks/all-stacks', compact('stacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/stacks/new-stacks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

              $stack = new Stack;

              //create new post
              $stack->title = request('title');
              $stack->description = request('description');
              $stack->bg_img = request('bg_img');
              $stack->slug = request('slug');
              $stack->user_id =  Auth::user()->id;

              $stack->save();
              // $stack->users()->attach(Auth::user()->id);

              return redirect('/admin/stacks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin/stacks/view-stacks');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stack = Stack::find($id);
        $skills = Skill::all();


        return view('admin/stacks/edit-stacks', compact('stack', 'skills'));
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
      $stack = Stack::find($id);

      $stack->update($request->all());

      return back()->withInput();
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

    public function addSkills(Request $request, $stack_id)
    {
      $stack = Stack::find($stack_id);
      $skills = Skill::all();

              // $stack = new Stack;
              //
              // //create new post
              // $stack->title = request('title');
              // $stack->description = request('description');
              // $stack->bg_img = request('bg_img');
              // $stack->slug = request('slug');
              // $stack->user_id =  Auth::user()->id;
              //
              // $stack->save();
              // // $stack->users()->attach(Auth::user()->id);

              return view('admin/stacks/add-skills', compact('stack', 'skills'));
    }

    public function saveSkills(Request $request, $stack_id)
    {
      $stack = Stack::find($stack_id);
      $skills = Skill::all();

              // $stack = new Stack;
              //
              // //create new post
              // $stack->title = request('title');
              // $stack->description = request('description');
              // $stack->bg_img = request('bg_img');
              // $stack->slug = request('slug');
              // $stack->user_id =  Auth::user()->id;
              //
              // $stack->save();
              // // $stack->users()->attach(Auth::user()->id);

              return view('admin/stacks/add-skills', compact('stack', 'skills'));
    }
}
