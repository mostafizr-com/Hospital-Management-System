<?php

namespace App\Http\Controllers\dashboard;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['departments'] = Department::latest()->get();
        return view('cp.departments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cp.departments.create');
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
            'slug' => 'max:191',
            'image' => 'max:191',
      ]);

      $data = new Department();

      $data->name = $rq->name;
      $data->slug = $rq->slug;   
      $data->description = $rq->description;
      $data->image = "";
      $data->save();

      Session::flash('success', 'Data created successfully');

      return redirect()->route('all_department');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['item'] = Department::whereId($id)->first();
        return view('cp.departments.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item'] = Department::whereId($id)->first();
        return view('cp.departments.edit', $data);
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
            'slug' => 'max:191',
            'image' => 'max:191',
      ]);

      $data = new Department();

      $data->name = $rq->name;
      $data->slug = $rq->slug;   
      $data->description = $rq->description;
      $data->image = "";
      $data->save();

      Session::flash('success', 'Data created successfully');

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
