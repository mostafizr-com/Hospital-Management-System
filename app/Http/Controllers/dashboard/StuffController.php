<?php

namespace App\Http\Controllers\dashboard;

use App\Stuff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class stuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stuffs'] = Stuff::latest()->get();
        return view('cp.stuffs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cp.stuffs.create');
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

      $data = new Stuff();

      $data->name = $rq->name;
      $data->phone = $rq->phone;   
      $data->position = $rq->position;  
      $data->description = $rq->description;
      $data->skills = $rq->skills;  
      $data->image = "";
      $data->save();

      Session::flash('success', 'Data created successfully');

      return redirect()->route('all_stuff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['item'] = Stuff::whereId($id)->first();
        return view('cp.stuffs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item'] = Stuff::whereId($id)->first();
        return view('cp.stuffs.edit', $data);
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
            'phone' => 'max:191',
            'position' => 'max:191',
            'image' => 'max:191',
      ]);

      $data = Stuff::find($id);

      $data->name = $rq->name;
      $data->phone = $rq->phone;   
      $data->position = $rq->position;  
      $data->description = $rq->description;
      $data->skills = $rq->skills; 
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
