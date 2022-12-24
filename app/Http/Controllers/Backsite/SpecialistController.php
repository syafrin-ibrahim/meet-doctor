<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\MasterData\Specialist;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Requests\Specialist\StoreSpecialistRequest;
use App\Requests\Specialist\UpdateSpecialistRequest;

class SpecialistController extends Controller
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
        $specialist = Specialist::orderBy('created_at','desc')->get();

        return view('pages.backsite.master-data.specialist.index',compact('specialist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialistRequest $request)
    {
        $input = $request->all();
        $data = Specialist::create($input);
        alert()->success('Success Message', 'Succesfully Added New Specialist');
        return redirect()->route('backsite.specialist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Specialist $specialist)
    {
      return view('pages.backsite.master-data.specialist.show')->compact('specialist');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialist $specialist)
    {
        return view('pages.backsite.master-data.specialist.edit')->compact('specialist');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecialistRequest $request, Specialist $specialist)
    {
        $data = $request->all();
        $specialist->update($data);
        alert()->success('Success Message', 'Succesfully Updated Specialist');
        return redirect()->route('backsite.specialist.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->forcerDelete();
        alert()->success('Success Message', 'Succesfully Deleted Specialist');
        return back();
    }
}
