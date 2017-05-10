<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // check if user has role
      // $user->hasRole('super_user');
        return view('frontpage');
    }

    public function logout(){
      Session::flush();
        return redirect('/');
    }
}
