<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'main_image',
        'views',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'published_at',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
