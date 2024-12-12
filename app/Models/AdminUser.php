<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    // protected $fillable = ['username', 'name', 'password', 'avatar'];

    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class);
    }

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'admin_user_id');
    }

    // Provide a default avatar if none exists
    public function getAvatarAttribute($value)
    {
        return $value ? asset('uploads/' . $value) : asset('/vendor/open-admin/open-admin/gfx/user.svg'); 
    }

}
