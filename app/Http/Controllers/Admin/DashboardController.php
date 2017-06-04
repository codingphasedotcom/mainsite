<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index() {
      $user = Auth::user();
      if($user->hasRole('super_user')
      || $user->hasRole('admin')
      || $user->hasRole('moderator')){

        return view('admin/dashboard');
      }
      else{
        return "Sorry No Access to This Page";
      }
    }
}
