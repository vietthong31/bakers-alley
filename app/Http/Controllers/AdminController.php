<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        // return login form if GET method
        if ($request->method() == 'GET') {
            return view('admin.login');
        } else {
            $attributes = request()->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required|min:6|max:20'
                ]
            );
            $credentials = array('email' => $attributes['email'], 'password' => $attributes['password']);
            // dd(Auth::guard('admin')->attempt($credentials));
            if (Auth::guard('admin')->attempt($credentials)) {
                // dd('test');
                // session()->regenerate();
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->withInput()->with(['message' => 'Đăng nhập không thành công']);
            }
        }
    }


    public function getLogin()
    {
        return view('admin.login');
    }


    /**
     * Login.
     *
     */
    public function postLogin(Request $request)
    {
        $attributes = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ]
        );
        $credentials = array('email' => $attributes['email'], 'password' => $attributes['password']);
        if (Auth::attempt($credentials)) {
            return redirect('admin')->with(['message' => 'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['message' => 'Đăng nhập không thành công']);
        }
    }

    /**
     * Log the user out of application
     * 
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
