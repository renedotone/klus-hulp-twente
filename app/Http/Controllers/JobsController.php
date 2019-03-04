<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use Auth;
use App\Response;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobs::all();
        return view('jobs.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.addingjobs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobs = new Jobs();

        $jobs->naam_plaatser = auth()->user()->name;
        $jobs->id_plaatser = auth()->user()->id;
        $jobs->email_plaatser = auth()->user()->email;
        $jobs->adres_plaatser = auth()->user()->adres;
        $jobs->postcode_plaatser = auth()->user()->postcode;
        $jobs->gemeente_plaatser = auth()->user()->gemeente;
        $jobs->telefoonnummer_plaatser = auth()->user()->telefoonnummer;
        $jobs->type_hulpvraag = request('type_hulpvraag');
        $jobs->beschrijving_hulpvraag = request('beschrijving_hulpvraag');

        $jobs->save();

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Jobs::findOrFail($id);
        return view('jobs.jobdetail', compact('job'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Jobs::findOrFail($id);

        return view('jobs.editjobs')->with('job', $job);
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
        $jobs = Jobs::find($id);

        $jobs->type_hulpvraag = request('type_hulpvraag');
        $jobs->beschrijving_hulpvraag = request('beschrijving_hulpvraag');

        $validatedData = $request->validate([
            'type_hulpvraag' => 'required|max:255',
            'beschrijving_hulpvraag' => 'required|max:255',
        ]);

        $jobs->save();

        if(Auth::guard('admin')->check())
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs = Jobs::findOrFail($id);
        $jobs->delete();

        if(Auth::guard('admin')->check())
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    public function search(Request $request)
    { 
        $search = $request->get('search');
        $jobs =  Jobs::where('naam_plaatser', 'like', '%' .$search. '%')
                ->orWhere('type_hulpvraag', 'like', '%' .$search. '%')
                ->orWhere('beschrijving_hulpvraag', 'like', '%' .$search. '%')
                ->orWhere('gemeente_plaatser', 'like', '%' .$search. '%')->paginate(25);
        
        return view('jobs.jobs', compact('jobs')); 
    }
}
