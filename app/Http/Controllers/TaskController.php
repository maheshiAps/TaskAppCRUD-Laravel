<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;

class TaskController extends Controller
{
   public function store(Request $request){
        
        $act=new Activities;
        
        $act->task=$request->task;
        $act->save();
        return redirect()->back();
   }
}
