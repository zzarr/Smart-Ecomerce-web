<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Users;

class RegisterController extends Controller
{
    /**
     * Show the application's registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $title = 'register';
        return view('auth.register', compact('title'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validasi input pengguna
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'p' => 'required|in:petani,konsumen', // Validasi role
        ]);

        // Buat pengguna baru
        $user = Users::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->p,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Tambahkan data spesifik berdasarkan role
        if ($request->p == 'petani') {
            DB::table('petani')->insert([
                'user_id' => $user['id'],
            ]);
        }

        if ($request->p == 'konsumen') {
            DB::table('konsumen')->insert([
                'user_id' => $user['id'],
            ]);
        }

        // Autentikasi pengguna baru
        Auth::login($user);


        // Redirect ke halaman dashboard
        return redirect()->intended('dashboard');
    }
}
