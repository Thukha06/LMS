<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_infos';

    protected $fillable = [
        'admin_user_id', 
        'email', 
        'email_verified_at', 
        'phone_number'
    ];

    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id', 'id');
    }

}
