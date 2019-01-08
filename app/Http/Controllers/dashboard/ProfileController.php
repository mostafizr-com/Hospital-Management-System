<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

    function index()
    {
        $id =  Auth::user()->id;

        $data['user'] = User::findOrFail($id);

        return view('cp/profile', $data);
    }

    function save_profile(Request $rq)
    {
        $id =  Auth::user()->id;

        $rq->validate([
               'name' => 'required|max:191',
               'email' => 'required|email|max:191|unique:users,email,'.$id =  Auth::user()->id,
               'skills' => 'max:191',
        ]);
        //  dd($rq->all());
        $data = User::find($id);
        $data->name = $rq->name;
        $data->email = $rq->email;
        $data->image = "image.png";
        $data->brief = $rq->brief;
        $data->skills = $rq->skills;
        $data->save();

        Session::flash('success', 'Profile data saved successfully!');
        
        return redirect()->back();
    }

    function change_password(Request $rq)
    {
        // dd($rq->all());
        $id =  Auth::user()->id;
        $rq->validate([
                'old_password' => 'required',
                'password' => 'required|same:confirm_password|min:4|max:191'
        ]);

        if (Hash::check($rq->old_password, Auth::user()->password) ) 
        {
            // dd(Hash::make($rq->password));
            $data = User::find($id);
            $data->password = Hash::make($rq->password);
            $data->save();
            Session::flash('success', 'Password changed successfully!');
        }
        else
        {
            // dd('error');
            Session::flash('error', 'Sorry! the old password is not your exact password.'); 
        }

        return redirect()->back();

       
    }

}
