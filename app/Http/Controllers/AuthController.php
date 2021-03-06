<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    private $check;
    private $user;

    public function login(){

        return view('login.login');
    }

    public function logout(){

        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('user_image');

        return redirect('/');
    }
    public function register(){

        return view('login.register');
    }

    public function newRegister(Request $request){

        $this->user = Student::newStudent($request);

        Session::put('student_id', $this->user->id);
        Session::put('student_name', $this->user->name);
        return redirect('/student-dashboard')->with('message', 'Registration Successfully');
    }

    public function newLogin(Request $request){

        if ($request->check == 1){

            $this->user = Teacher::where('email', $request->email)->where('status', 1)->first();
            if ($this->user){

                if (password_verify($request->password, $this->user->password)){

                    Session::put('user_id', $this->user->id);
                    Session::put('user_name', $this->user->name);
                    Session::put('user_image', $this->user->image);

                    return redirect('/teacher-dashboard');
                }
                else{

                    return redirect()->back()->with('message','Invalid Password');
                }
            }
            else{

                return redirect()->back()->with('message','Email Address is Invalid or Status is Inactive');
            }
        }
        else{

            $this->user = Student::where('email', $request->email)->where('status', 1)->first();
            if ($this->user){

                if (password_verify($request->password, $this->user->password)){

                    Session::put('student_id', $this->user->id);
                    Session::put('student_name', $this->user->name);

                    return redirect('/student-dashboard');
                }
                else{

                    return redirect()->back()->with('message','Invalid Password');
                }
            }
            else{

                return redirect()->back()->with('message','Email Address is Invalid or Status is Inactive');
            }
        }
    }

    public function studentLogout(Request $request){

        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }
}
