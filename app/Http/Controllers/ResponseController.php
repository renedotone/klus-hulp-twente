<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use App\Jobs;
use Auth;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Response::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new Response();

        $response->naam_plaatser_response = auth()->user()->name;
        $response->id_plaatser_response = auth()->user()->id;
        $response->bericht_plaatser_response = request('response');
        $response->naam_plaatser_hulpvraag = request('naam_plaatser_hulpvraag');
        $response->hulpvraag_id = request('job_id');

        $response->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Response::findOrFail($id);
        $response->delete();


        if(Auth::guard('admin')->check()) 
        {
            return redirect('/admin');
        } 
        else 
        {
            return redirect('/dashboard');
        }
    }
}
