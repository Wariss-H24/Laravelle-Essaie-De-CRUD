<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 /** 
     * @use HasFactory<\Database\Factories\ArticleFactory>
     */


class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected $appends = [
        'author','comments'
    ];

    public function getAuthorAttribute()
    {
        return $this->user->name;
    }

    // public function getCommentsAttribute()
    // {
    //     return $this->with('user')->get();
    // }
}
