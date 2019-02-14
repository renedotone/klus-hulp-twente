<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userblogposts;

class userblogpostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userblogposts = Userblogposts::all();
        return view('userblogposts', compact('userblogposts'));
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
        $userblogposts = new Userblogposts();

        $userblogposts->naam_plaatser_blog = auth()->user()->name;
        $userblogposts->id_plaatser_blog = auth()->user()->id;
        $userblogposts->type_hulpvraag_blog = request('type_hulpvraag_blog');
        $userblogposts->beschrijving_hulpvraag_blog = request('beschrijving_hulpvraag_blog');

        $userblogposts->save();

        return redirect('/userblogposts');
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
        //
    }
}
