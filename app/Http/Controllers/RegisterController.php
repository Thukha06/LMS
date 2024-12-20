<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
use App\Models\UserInfo;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'username' => 'required|min:4|unique:admin_users,name',
            'email' => 'required|email|unique:user_infos,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Preprocess username: trim spaces, remove extra spaces, and convert to lowercase
        $profileName = $validatedData['username'];
        $validatedData['username'] = strtolower(preg_replace('/\s+/', '', trim($validatedData['username'])));

        // Create a new user
        $adminUser = new AdminUser();
        $adminUser->username = $validatedData['username'];
        $adminUser->password = Hash::make($validatedData['password']); // Hashing password
        $adminUser->name = $profileName;
        $adminUser->save();

        // Also create a new user info linked to it
        $userInfo = new UserInfo();
        $userInfo->email = $validatedData['email'];
        $userInfo->admin_user_id = $adminUser->id;
        $userInfo->save();

        // Log the user in after registration
        auth()->login($adminUser); // Authenticated session login
        
        // return redirect()->route('home')->with('success', 'Registration successful and logged in.');
        return response()->json(['success' => 'Registration successful.']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
