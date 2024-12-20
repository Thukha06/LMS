<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    use HasFactory;

    protected $table = 'admin_roles';

    public function user() 
    {
        return $this->belongsToMany(AdminUser::class, 'admin_role_users', 'role_id', 'user_id');
    }
}
