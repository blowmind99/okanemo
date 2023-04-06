<?php

namespace App\Models;

use App\Traits\CreatedTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, CreatedTime;

    protected $fillable = [
        'name',
        'category_id',
        'type',
        'status',
        'description',
        'created_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function enrollments() {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }

}
