<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        $title = 'Register';
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
        // Validate user input
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:petani,konsumen', // Validate role
        ]);

        // Create new user
        $user = Users::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add role-specific data
        if ($request->role == 'petani') {
            DB::table('petani')->insert([
                'user_id' => $user->id,
            ]);
        }

        if ($request->role == 'konsumen') {
            DB::table('konsumen')->insert([
                'user_id' => $user->id,
            ]);
        }

        // Authenticate the new user
        Auth::login($user);

        // Redirect to the appropriate dashboard
        return redirect()->intended($this->redirectPath($request->role));
    }

    /**
     * Get the post registration redirect path based on role.
     *
     * @param  string  $role
     * @return string
     */
    protected function redirectPath($role)
    {
        return $role === 'petani' ? '/dashboard_petani' : '/dashboard_konsumen';
    }
}
