<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function courseCreate(){
        return view('admin.course_create');
    }
    public function courseCreateStore(Request $request){
        dd($request->all());
        return view('admin.course_create');
    }

}
