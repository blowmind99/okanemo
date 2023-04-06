<?php

namespace App\Models;

use App\Traits\CreatedTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, CreatedTime;

    protected $fillable = [
        'name',
        'created_at'
    ];

    public function category() {
        return $this->hasMany(Course::class, 'category_id', 'id');
    }

    public function created_time()
    {
        return date('d F Y h:i:s', strtotime($this->created_at));
    }
}
