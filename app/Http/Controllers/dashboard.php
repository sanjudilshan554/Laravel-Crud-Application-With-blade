<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\register;
class dashboard extends Controller
{
    public function showDashBoard(Request $request){

        // $data=register::all();

        // $id=$request->id;

        // $username=register::select('name')
        // ->where('id',$id)
        // ->get();

        // $username=$username[0]['name'];

        // Session::put('user_id',$id);
        // Session::put('user_name',$username);

        // $username=Session::get('user_name');
        // $userid=Session::get('user_id');
        
        $data=register::all();

        $id=$request->id;

        $user=register::select('name','id')
        ->where('id',$id)
        ->get();

        $username=$user[0]['name'];
        $userid=$user[0]['id'];
        // $username=$user->name;
        // $userid=$user->id;

        Session::put('user_id',$userid);
        Session::put('user_name',$username);

        $username=Session::get('user_name');
        $userid=Session::get('user_id');

        return view('dashboard.dashboard',['data'=>$data, 'username'=>$username, 'userid'=>$userid, 'message'=>'login Success']);
    }
}
