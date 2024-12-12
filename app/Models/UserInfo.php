<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_infos';

    // protected $fillable = ['admin_user_id', 'email', 'email_verified_at', 'phone_number'];

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'admin_user_id');
    }

    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }
}
