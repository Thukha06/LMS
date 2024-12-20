<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'course_id', 'status'];

    /**
     * Define relationship with AdminUser (students).
     */
    public function student()
    {
        return $this->belongsTo(AdminUser::class, 'student_id');
    }

    /**
     * Define relationship with Course.
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
