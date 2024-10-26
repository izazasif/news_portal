<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'user_id',
        'content',
        'likes',
    ];

    public function article()
    {
        return $this->belongsTo(NewsArticle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
