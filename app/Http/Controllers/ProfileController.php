<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;
use App\Models\Course;

class ProfileController extends Controller
{
    // View profile
    public function index()
    {
        $user = Auth::guard('user')->user(); // Get the logged-in user
        
        // Load related data (roles and user info)
        $user->load(['userInfo', 'roles']); // Eager load roles and user info
    
        $profileData = [
            'name' => $user->name,
            'avatar' => $user->avatar,
            'role_name' => $user->roles->first()?->name ?? 'Student',
            'email' => $user->userInfo->email,
            'phone_number' => $user->userInfo->phone_number,
            'description' => $user->userInfo->description ?? 'The user hasn\'t assigned any description yet.',
        ];

        $myCourses = Course::with('adminUser')->where('teacher_id', $user->id)->get();
    
        return view('user.profile', compact('profileData', 'myCourses'));
    }
}
