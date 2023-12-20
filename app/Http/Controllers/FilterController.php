<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(){
        $users=User::all();
        return view('welcome',compact('users'));
    }
    public function filter(Request $request){

        $start_date=$request->start_date;
        $end_date=$request->end_date;


        $users=User::whereDate('birthday','>=', $start_date)
        ->whereDate('birthday','<=', $end_date)->get();
        // dd($users);
        return view('welcome',compact('users'));
    }
}
