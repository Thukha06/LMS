<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    protected $table = 'courses'; // Ensure the correct table name

    protected $fillable = [
        'category_id', 
        'title', 
        'slug',
        'date_start',
        'date_end',
        'hour_start',
        'hour_end',
        'description',
        'avatar',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class, 'teacher_id');
    }

    /**
     * Define relationship with Enrollment.
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id');
    }

    /**
     * Define relationship with students through enrollments.
     */
    public function students()
    {
        return $this->belongsToMany(AdminUser::class, 'enrollments', 'course_id', 'student_id');
    }

    // Auto generate slugs when there's a data entry
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = self::generateUniqueSlug($course->title);
        });

        static::updating(function ($course) {
            if ($course->isDirty('title')) {
                $course->slug = self::generateUniqueSlug($course->title);
            }
        });
    }

    private static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::where('slug', 'LIKE', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
