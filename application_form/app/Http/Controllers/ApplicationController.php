<?php

namespace App\Http\Controllers;
use App\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ApplicationController extends Controller
{
    public function create(){
        return view('create');
    }
//   public function store(Request $request){
//       $data=$request->all();
//       Application::creating($data);
//       Session::flash('message','Application Submitted');
//       return redirect()->back();
//
//
//    }
}
