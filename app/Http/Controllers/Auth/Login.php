<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Conducteur;
use App\Models\Passager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

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
        $password = md5($request->password);

        //  dd($email,$password);

        // return dd($conducteurs[0]->password, md5($password), 'result :', md5($password) == $conducteurs[0]->password);
        // return dd();
        // dd($password, md5($password), $conducteurs[0]->password, $email);

        foreach ($conducteurs as $conducteur) {
            if ($conducteur->email == $email && $conducteur->password == $password) {
                session()->put('conducteur', $conducteur);

                return redirect()->route("conducteur");
                // return redirect()->route('conducteur.dashboard'); // Modify this to the appropriate conducteur dashboard route
                // return dd(session()->get('conducteur'));
                // return session('conducteur');
            }
        }

        foreach ($admins as $admin) {
            if ($admin->email == $email && $admin->password == $password) {
                session()->put('admin', $admin);
                return redirect()->route("admin");
            }
        }

        foreach ($passagers as $passager) {
            if ($passager->email == $email && $passager->password == $password) {
                session()->put('passager', $passager);
                return redirect()->route("passager");
            }
        }

        return dd("nothing");
    }

    function logout()
    {
        session()->forget('conducteur');
        session()->forget('passager');
        session()->forget('admin');

        return redirect()->route('login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Passager::class, 'unique:' . Conducteur::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => md5($request->password),
        ];

        $user = null;

        if ($request->get('guard') === 'passager') {
            $user = Passager::create($data);
        }

        if ($request->get('guard') === 'conducteur') {
            $user = Conducteur::create($data);
        }

        // if ($user instanceof Authenticatable) {
        //     event(new Registered($user));
        //     Auth::login($user);
        // }

        return redirect(url('/login'));
    }
}
