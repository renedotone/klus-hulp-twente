<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Jobs;

use Illuminate\Http\Request;

class JobDetailController extends Controller
{
    public function index($id)
    {
        $jobs = DB::table('jobs')->where('id', $id)->get();

        return view('jobdetail')->with('jobs', $jobs);
    }
}
