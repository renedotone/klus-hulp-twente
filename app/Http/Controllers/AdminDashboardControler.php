<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Jobs;
use App\Userblogposts;

class AdminDashboardController extends Controller
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

        return view('admindashboard')
        ->with('jobs', $jobs)
        ->with('userblogposts', $userblogposts);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Jobs::findOrFail($id);
        $job->delete();
        return redirect('/admindashboard');

    }

}
