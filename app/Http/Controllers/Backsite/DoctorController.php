<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\MasterData\Doctor;
use App\Models\MasterData\Specialist;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Requests\Specialist\StoreDoctorRequest;
use App\Requests\Specialist\UpdateDoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $doctor = Doctor::orderBy('created_at','desc')->get();
        $specialist = Specialist::orderBy('name','asc')->get();
        return view('pages.backsite.operational.doctor.index',compact('doctor','specialist'));
    
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
    public function store(StoreDoctorRequest $request)
    {
        $input = $request->all();
        $data = Doctor::create($input);
        alert()->success('Success Message', 'Succesfully Added New Doctor');
        return redirect()->route('backsite.doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('pages.backsite.operational.doctor.show')->compact('doctor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $specialist = Specialist::orderBy('name','asc')->get();
        return view('pages.backsite.operational.doctor.edit')->compact('doctor','specialist');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request)
    {
        $input = $request->all();
        $data = Doctor::create($input);
        alert()->success('Success Message', 'Succesfully Updated Doctor');
        return redirect()->route('backsite.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->forceDelete();
        alert()->success('Success Message', 'Succesfully Deleted Doctor');
        return back();        
    }
}
