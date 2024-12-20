<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (URL::previous() && URL::previous() !== route('login')) {
            session()->put('url.intended', URL::previous());
        }

        return view('user.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:4',
        ]);

        $email = $request->email;
        $password = $request->password;

        // Perform the JOIN query
        $query = DB::table('user_infos')
            ->join('admin_users', 'user_infos.admin_user_id', '=', 'admin_users.id') // Correct join
            ->select('admin_users.id', 'admin_users.password')
            ->where('user_infos.email', $email)
            ->first();

        if ($query && Hash::check($password, $query->password)) {
            // Manual authentication using the admin guard
            Auth::guard('user')->loginUsingId($query->id);

            return redirect()->intended(url()->previous() ?? route('home')); // Redirect on success
        } else {
            return back()->withErrors(['password' => 'Invalid credentials!']);
        }

        return back()->withErrors([
            'email' => 'Email credentials do not match our records.',
        ]);
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('home');;
    }

}
