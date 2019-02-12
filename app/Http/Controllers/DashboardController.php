<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jobs;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        $jobs = DB::table('jobs')->select('naam_plaatser')->get();
        
        // $jobs = DB::first()->get()


        return view('dashboard')->with('jobs', $jobs);
    }


}
