<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Mentor;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    public function login(){

        return view('login', ['title' => 'Login']);

    }
    public function register(){

        return view('register', ['title' => 'Register']);
        
    }
    public function store_data_register(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
            'confirm_password' => 'required|same:password',
        ]);

        $validation['password'] = bcrypt($validation['password']);
        
        User::create($validation);
        Student::create([
            'user_id' => User::where('email', $request->email)->first()->id, 
            'status' => true,
        ]);
        Mentor::create([
            'user_id' => User::where('email', $request->email)->first()->id, 
            'status' => false,
            'description' =>'dgfsjgdhjfgjhsdagfjhasdgfjasdgfjsdagfsdgfhjsdgfhjdfgshjdagfjhasdgfjhsdagfhjsda'
        ]);
        Admin::create([
            'user_id' => User::where('email', $request->email)->first()->id, 
            'status' => false
        ]);

        return redirect()->route('login');
    }
    public function authorization(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->admin->status){
                return redirect()->route('admin.index');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home');
    }
    
}
