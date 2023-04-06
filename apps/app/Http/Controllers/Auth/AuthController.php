<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\SessionHelper;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.index');
    }

    public function login(LoginRequest $request)
    {
        try {
            if (Auth::attempt($this->credential($request->email, $request->password))) {
                return redirect('dashboard');
            }
            SessionHelper::alert('danger', 'Email, username or password not found');
            return back();
        } catch(\Exception $e) {
            SessionHelper::alert('danger', 'Terjadi kesalahan');
            return back();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    private function credential($email, $password)
    {
        return [
            'email'    => $email,
            'password' => $password,
        ];
    }
}
