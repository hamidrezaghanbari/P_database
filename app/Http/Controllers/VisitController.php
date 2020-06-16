<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visits = Visit::all();
        $title = 'visits';
        return view('admin_admin.visits.visits', ['visits'=>$visits, 'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_visit($doctor_id)
    {
        $doctor = Doctor::whereId($doctor_id)->first();
        return view('admin_admin.frontend.create_visit', ['doctor'=>$doctor]);
    }

    public function store_visit(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }

    public function visit_medicines($visit_id)
    {
        $visit = Visit::whereId($visit_id)->first();
        $medicines = $visit->medicines()->get();
        $title = 'visits';
        $description = ' پزشک معالج '.$visit->doctor()->first()->user()->first()->name.' '.$visit->doctor()->first()->user()->first()->family;
        return view('admin_admin.medicines.medicines', ['medicines'=>$medicines, 'title'=>$title, 'description'=>$description]);
    }
}
