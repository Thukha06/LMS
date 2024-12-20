<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AdminUser extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'admin_users'; // Ensure the correct table name

    protected $fillable = [
        'username', 
        'password', 
        'name',
        'avatar'
    ];

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'admin_user_id', 'id');
    }

    public function roles() 
    {
        return $this->belongsToMany(AdminRole::class, 'admin_role_users', 'user_id', 'role_id');
    }

    public function taughtCourses() 
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    /**
     * Define relationship with Enrollment.
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }

    /**
     * Define relationship with courses through enrollments.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'student_id', 'course_id');
    }

    // Provide a default avatar if none exists
    public function getAvatarAttribute($value)
    {
        return $value ? asset('uploads/' . $value) : asset('/vendor/open-admin/open-admin/gfx/user.svg'); 
    }

    // Role Check
    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    // Auth Functions
    public function getAuthIdentifier()
    {
        return $this->getKey(); // Primary key
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getAuthEmail()
    {
        return $this->email;
    }

}
