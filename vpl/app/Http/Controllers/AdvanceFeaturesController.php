<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Number;
use App\Models\User;

class AdvanceFeaturesController extends Controller
{
    public function voice_messages()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.voicemessages',
        [
            'user' => $user
        ]);
    }

    public function voice_mail_setting()
    {
        $user = Auth::user();
        $numbers = Number::where('user_id', $user->id)->get();
        return view('customer_panel.advance_feature.voicemailsetting'
        ,[
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function call_recordings()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.callrecording',
        [
            'user' => $user
        ]);
    }


    public function ivr_setting()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.IVR_manager',
        [
            'user' => $user
        ]);
    }


    public function virtual_pbx_setting()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.virtualpbx',
        [
            'user' => $user
        ]);
    }

    public function pbx_setting()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.PBXsetting',
        [
            'user' => $user
        ]);
    }

    public function upload_pbx()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.UploadPBXIVR',
        [
            'user' => $user
        ]);
    }
}
