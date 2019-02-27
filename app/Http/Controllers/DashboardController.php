<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Jobs;
use App\Userblogposts;
use App\Response;

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
        $id= Auth::user()->id;
        $jobs = DB::table('jobs')->where('id_plaatser', $id)->get();
        $userblogposts = DB::table('userblogposts')->where('id_plaatser_blog', $id)->get();
        $response = DB::table('responses')->where('id_plaatser_response', $id)->get();

        return view('dashboard')
        ->with('jobs', $jobs)
        ->with('userblogposts', $userblogposts)
        ->with('responses', $response);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

    }

}
