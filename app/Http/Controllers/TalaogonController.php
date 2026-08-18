<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TalaogonController extends Controller
{
    public function index()
    {
        return view('talaogon.index');
    }

    public function showLogin()
    {
        return view('talaogon.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'uname' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('login_tb')
            ->where('username', $request->uname)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            Session::put('user', (array) $user);
            Session::put('login_time', time());
            return redirect()->route('home');
        }

        return back()->with('error', 'Invalid Username or Password!');
    }

    public function showSignup()
    {
        return view('talaogon.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'uname' => 'required|unique:login_tb,username',
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required'
        ]);

        DB::table('login_tb')->insert([
            'username' => $request->uname,
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function account()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $sessionUser = Session::get('user');
        $user = DB::table('login_tb')->where('username', $sessionUser['username'])->first();

        $loginTime = Session::get('login_time', time());
        $timeSpent = time() - $loginTime;

        $hours = floor($timeSpent / 3600);
        $minutes = floor(($timeSpent % 3600) / 60);
        $seconds = $timeSpent % 60;

        return view('talaogon.account', compact('user', 'hours', 'minutes', 'seconds'));
    }

    public function logout()
    {
        Session::forget(['user', 'login_time']);
        return redirect()->route('login');
    }


    public function admin()
    {
        $user = Session::get('user');
        if (!$user || data_get($user, 'username') !== 'admin') {
            return redirect()->route('home');
        }

        $users = DB::table('login_tb')->get();
        return view('talaogon.admin', compact('users'));
    }

    public function edit($id)
    {
        $user = Session::get('user');
        if (!$user || data_get($user, 'username') !== 'admin') {
            return redirect()->route('home');
        }

        $editUser = DB::table('login_tb')->where('id', $id)->first();
        return view('talaogon.edit', compact('editUser'));
    }

    public function update(Request $request, $id)
    {
        DB::table('login_tb')->where('id', $id)->update([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'password' => $request->password,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.index')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        DB::table('login_tb')->where('id', $id)->delete();
        return redirect()->route('admin.index')->with('success', 'User deleted successfully!');
    }
}