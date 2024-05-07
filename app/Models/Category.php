<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function blogPosts()
    {
        return $this->hasMany(BlogsPost::class);
    }
    public function industryInsightsPosts()
    {
        return $this->hasMany(IndustryInsightsPost::class);
    }
}
