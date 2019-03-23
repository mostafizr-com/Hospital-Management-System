<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Appoinment;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['appoinments'] = Appoinment::latest()->whereConfirm_status(0)->get();

        return view('cp.appoinment.index', $data);
    }

    public function get_appoinment_data()
    {
        $data = Appoinment::latest()->whereConfirm_status(false);

        return DataTables::of($data)
        ->addColumn('action', function ($data) {
            return '<a class="btn btn-danger" href="delet-appoinment/'.$data->id.'">X</a>';
        })
        ->addColumn('sr', function ($data) {
            return $data->id;
        })
        ->make(true);
    }

    public function index_confirmed()
    {
        return view('cp.appoinment.confirmed_index');
    }

    public function get_confirmed()
    {
        $data = Appoinment::latest()->whereConfirm_status(true);

        return DataTables::of($data)
        ->addColumn('action', function ($data) {
            return '<a class="btn btn-danger" @click="delet_appoinment('.$data->id.')">X</a>';
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $data = Appoinment::find($id)->update($request->all());

        return response()->json('Appoinment confirmed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
