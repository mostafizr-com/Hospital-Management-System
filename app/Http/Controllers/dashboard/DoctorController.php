<?php

namespace App\Http\Controllers\dashboard;

use App\Doctor;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['doctors'] = Doctor::latest()->get();
        return view('cp.doctors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['departments'] = Department::orderBy('name', 'ASC')->get();
        return view('cp.doctors.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $rq
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        // dd($rq->all());
        $rq->validate([
            'name' => 'required|max:191',
            'phone' => 'required|max:191',
            'degrees' => 'required|max:191',
            'skills' => 'required|max:191',
            'department_id' => 'required',
            'schedule' => 'max:191',
      ]);

      $data = new Doctor();

      $data->name = $rq->name;
      $data->phone = $rq->phone;
      $data->degrees = $rq->degrees;   
      $data->skills = $rq->skills;
      $data->department_id = $rq->department_id;
      $data->description = $rq->description;
      $data->schedule = $rq->schedule;
      $data->image = "";
      $data->save();

      Session::flash('success', 'Data created successfully');

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
        $data['item'] = Doctor::whereId($id)->first();
        return view('cp.doctors.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item'] = Doctor::whereId($id)->first();
        $data['departments'] = Department::orderBy('name', 'ASC')->get();
        return view('cp.doctors.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $rq
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
  // dd($rq->all());
        $rq->validate([
            'name' => 'required|max:191',
            'phone' => 'required|max:191',
            'degrees' => 'required|max:191',
            'skills' => 'required|max:191',
            'department_id' => 'required|max:191',
            'schedule' => 'max:191',
      ]);

      $data = Doctor::find($id);
      
      $data->name = $rq->name;
      $data->phone = $rq->phone;
      $data->degrees = $rq->degrees;   
      $data->skills = $rq->skills;
      $data->department_id = $rq->department_id;
      $data->description = $rq->description;
      $data->schedule = $rq->schedule;
      $data->image = "";
      $data->save();

      Session::flash('success', 'Data updated successfully');

      return redirect()->back();
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
