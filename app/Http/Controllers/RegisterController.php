<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validate_Data=$request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required' ,'string ', 'min:8' , 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[@$!%*?&]).*$/'],
        ]);

        // $hashedPassword = Hash::make($validate_Data['password']);

        // // Set a desired length (e.g., 60 characters)
        // $desiredLength = 10;

        // // Truncate the hash if it's longer than the desired length
        // if (strlen($hashedPassword) > $desiredLength) {
        //     $truncatedHash = substr($hashedPassword, 0, $desiredLength);
        // } else {
        //     $truncatedHash = $hashedPassword; // Hash is already shorter than desired length
        // }

        $data=register::create([
            'name'=>$validate_Data['name'],
            'email'=>$validate_Data['email'],
            // 'password'=>Hash::make($validate_Data['password']),
            'password'=>$validate_Data['password'],
            // 'password' => $truncatedHash,
            
        ]);

        $message="User registration successfully";

        return response()->json(['data'=>$data,'status'=>'200','message'=>$message ]);
       // return redirect('/api/dashboard');
    }

    public function login(Request $request){
        session_start();

        $email=$request->email;
        $password=$request->password;

        $registration=register::where('email',$email)
        ->first();

       
        // HASH NOT WORKING
//  dd($registration);
        // if($registration){
        //     if(Hash::check($password, $registration->password)){
        //         $id=$registration->id;
        //         return null;
        //        // return redirect('/api/dashboard?id='.$id);
        //     }else{
        //         return "incorrect password";
        //     }
        // }else{
        //     return  "incorrct email or password";
        // }
        
        // $registration=register::where('email',$email)
        // ->first();


        if($registration){
        
         if($registration->email === $email && $registration->password === $password){
                $id=$registration->id;
                $_SESSION['user_id'] = $id;
                return redirect('/api/dashboard?id='.$id);
            }else{
                return "inccorect password";
            }

        }
        else
        {
            return  "incorrct email or password";
        }
        
    }

    public function logout(){

        Session::forget('userid');
        Session::forget('username');
        // return redirect('api/user/login');

    }

    // calling update interface
    public function updateView(Request $request){
        $data=register::find($request->id);
       return view('dashboard.userUpdateView',['user'=>$data]);
        
    }

    public function updateUser(Request $request){
        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;

        $user=register::find($id);

        if($user){
            $user->name=$name;
            $user->email=$email;
            $user->password=$password;
            $user->save();

            // return response()->json(['message'=>'data saved successfully', 'status'=>'200']);
            $data=register::find($request->id);
            
            return view('dashboard.userUpdateView',['user'=>$data]);
        }

    }

    // delete function
    public function deleteUser(Request $request){
        $id=$request->id;
        $currentUserId=$request->currentId;
        $user=register::find($id);

        if($user){
            $user->delete();
            return redirect('/api/dashboard?id='.$currentUserId);
        }else{
            return response()->json(['message'=>'invalid user']);
        }        
    }
}
