<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all()
        ]);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('session.login');
        } else {
            $attributes = request()->validate([
                'email' => 'required|email',
                'pwd' => 'required|min:6|max:20'
            ]);
            $credentials = ['email' => $attributes['email'], 'password' => $attributes['pwd']];
            if (Auth::attempt($credentials)) { //The attempt method will return true if authentication was successful. Otherwise, false will be returned.
                return redirect('/')->with(['flag' => 'alert', 'message' => 'Đăng nhập thành công', 'login' => true, 'email' => $attributes['email']]);
            } else {
                return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập không thành công']);
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('session.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate(
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'confirmpwd' => 'required|same:password',
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required'
            ]
        );
        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);
        return redirect('/signup')->with('success', 'Tạo tài khoản thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::firstWhere('id', $id);
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'phone' => 'numeric',
            'level' => 'numeric|between:1,2',
            'address' => 'string'
        ]);
        User::where('id', $id)->update($attributes);
        return redirect()->route('user.index')->with('success', 'Updated user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
