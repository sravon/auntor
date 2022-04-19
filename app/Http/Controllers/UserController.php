<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $user = User::where('email',$email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                Session::put('user_id', $user->id) ;
                return redirect()->route('home');
            } else {
                
            }
            
        }else{
            echo "user not foumnd";
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email1' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        $edu = new User();
        $edu->name = $request->name;
        $edu->email = $request->email1;
        $edu->password = Hash::make($request->password);
        $edu->save();
        
        return redirect()->back()->withInput()->with(['success' => 'register Success']);
    }
}
