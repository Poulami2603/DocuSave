<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Session;


class UserDataController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function upload(){
        return view('upload');
    }

    public function store_data(Request $request){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('data'), $imageName);
        $data = new UserData;
        $data->user_id = $request->session()->put('loginId', $data->user_id);
        $data->image = $imageName;
        $data->title = $request->title;
        $data->type = $request->type;
        $data->docid = $request->docid;
        $data->save();
        return back();
    }
}
