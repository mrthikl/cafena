<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function authAdmin()
    {
        $user_id = Session::get('user_id');
        if ($user_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function index()
    {
        return view('admin-login');
    }
    public function show_dashboard()
    {
        $this->authAdmin();
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        $user_email = $request->user_email;
        $user_password = Hash::check('user_password', $request->user_password);
        $result = User::where('user_email', $user_email)
            ->where('user_password', $user_password)
            ->where('is_admin', '=', '1')
            ->first();

        if ($result) {
            Session::put('user_name', $result->user_name);
            Session::put('user_id', $result->user_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'incorrect email or password');
            return Redirect::to('/admin');
        }
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Session::put('user_name', null);
        Session::put('user_id', null);
        return Redirect::to('/admin');
    }
}
