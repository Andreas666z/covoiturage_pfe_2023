<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Conducteur;
use App\Models\Passager;
use Illuminate\Http\Request;

class Login extends Controller
{

    function loginForm()
    {
        if (session()->has('admin')) {
            return view('admin/dashboard');
        } else if (session()->has('conducteur')) {
            return view('conducteur/dashboard');
        } else if (session()->has('passager')) {
            return view('passager/dashboard');
        } else {
            return view('auth.login');
        }
    }

    function login(Request $request)
    {
        $admins = Admin::all();
        $conducteurs = Conducteur::all();
        $passagers = Passager::all();


        $email = $request->email;
        $password = $request->password;

        // dd($email,$password);
        foreach ($conducteurs as $conducteur) {
            if ($conducteur->login == $email && $conducteur->passe == $password) {
                session()->put('conducteur', $conducteur);

                return redirect()->route('index');

                return dd(session()->get('conducteur'));
            }
        }

        foreach ($admins as $admin) {
            if ($admin->email == $email && $admin->passe == $password) {
                session()->put('admin', $admin);
                return dd(session()->get('admin'));
            }
        }

        foreach ($passagers as $passager) {
            if ($passager->email == $email && $passager->passe == $password) {
                session()->put('passager', $passager);
                return dd(session()->get('passager'));
            }
        }
    }
}
