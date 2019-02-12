<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Jobs;

class JobDetailController extends Controller
{
    public function index()
    {
        $id= Auth::user()->id;
        $jobs = DB::table('jobs')->where('id', $id)->get();

        // $jobs = DB::first()->get()


        return view('jobdetail')->with('jobs', $jobs);
    }
}
