<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stack;

class StacksController extends Controller
{
  public function index(){
    $stacks = Stack::all();

    return view('stacks/index', compact('stacks'));
  }
  
  public function show(){
    return view('stacks/show');
  }
}
