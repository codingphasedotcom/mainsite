<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillsController extends Controller
{
    public function index(){
      return view('skills/index');
    }

    public function show(){
      return view('skills/show');
    }

    public function apiAll()
    {
        $skills = Skill::all();

        return $skills;
    }
}
