<?php

namespace App\Http\Controllers\dashboard;

use App\System_option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SystemController extends Controller
{
    
    function index()
    {
        $data['option'] = System_option::where('id',1)->first();
        return view('cp.settings.general', $data);
    }

    function social_integration()
    {
        $data['option'] = System_option::where('id',1)->first();
        return view('cp.settings.social', $data);
    }

    function meta_script()
    {
        $data['option'] = System_option::where('id',1)->first();
        return view('cp.settings.metascript', $data);
    }

    function save_genral_options(Request $rq)
    {
        // dd($rq->all());
        $rq->validate([
              'title' => 'required|max:191',
              'slogan' => 'required|max:191',
              'keywords' => 'max:191',
              'logo' => 'max:191',
        ]);

        $data = System_option::find(1);
        $data->title = $rq->title;
        $data->slogan = $rq->slogan;
        $data->keywords = $rq->keywords;   
        $data->description = $rq->description;
        $data->logo = $rq->logo;
        $data->save();

        Session::flash('success', 'Data updated Successfully');

        return redirect()->back();
    }

    function save_social_integration(Request $rq)
    {
        // dd($rq->all());

        $rq->validate([
            'facebook_app_id' => 'max:191',
            'facebook_app_secrete' => 'max:191',
            'google_client_id' => 'max:191',
            'google_client_secret' => 'max:191',
        ]);

        $data = System_option::find(1);
        $data->facebook_app_id = $rq->facebook_app_id;
        $data->facebook_app_secrete = $rq->facebook_app_secrete;
        $data->google_client_id = $rq->google_client_id;
        $data->google_client_secret = $rq->google_client_secret;
        $data->save();

        Session::flash('success', 'Data updated Successfully');

        return redirect()->back();
    }

    function save_meta_scripts(Request $rq)
    {
        // dd($rq->all());

        $data = System_option::find(1);
        $data->google_analytics = $rq->google_analytics;     
        $data->facebook_sdk = $rq->facebook_sdk;
        $data->general_javascripts = $rq->general_javascripts;
        $data->save();
        
        Session::flash('success', 'Data updated Successfully');

        return redirect()->back();
    }
}
