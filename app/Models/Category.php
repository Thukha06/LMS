<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Ensure the correct table name

    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->hasMany(Course::class, 'category_id', 'id');
    }
}
