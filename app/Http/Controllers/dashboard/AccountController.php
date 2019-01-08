<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::latest()->get();
        return view('cp.accounts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cp.accounts.create');
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
            'email' => 'required|email|max:191|unique:users,email',
            'phone' => 'required|max:191',
            'image' => 'max:191',
            'skills' => 'max:191',
            'role'  => 'required',
            'password' => 'required|same:confirm_password|min:4|max:191',
      ]);

      $data = new User();

        $data->name = $rq->name;
        $data->email = $rq->email;
        $data->phone = $rq->phone;
        $data->image = "image.png";
        $data->brief = $rq->brief;
        $data->skills = $rq->skills;
        $data->role = $rq->role;
        $data->password = Hash::make($rq->password);
        $data->save();

        Session::flash('success', 'Account data saved successfully!');
        
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
        $data['item'] = Department::whereId($id)->first();
        return view('cp.accounts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item'] = User::whereId($id)->first();
        return view('cp.accounts.edit', $data);
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
            'email' => 'required|email|max:191|unique:users,email,'.$id,
            'phone' => 'required|max:191',
            'image' => 'max:191',
            'skills' => 'max:191',
            'role'  => 'required',
      ]);

        $data =  User::find($id);
        $data->name = $rq->name;
        $data->email = $rq->email;
        $data->phone = $rq->phone;
        $data->image = "image.png";
        $data->brief = $rq->brief;
        $data->skills = $rq->skills;
        $data->role = $rq->role;
        $data->save();

        Session::flash('success', 'Account data saved successfully!');
        
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
