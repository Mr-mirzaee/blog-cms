<?php

namespace App\Models;

use App\Traits\DataTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, DataTable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'images',
        'view',
        'approved'
    ];

    public function path()
    {
        return "/posts/$this->slug";
    }

    public function isApproved()
    {
        return (bool) $this->approved;
    }

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'catable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'tagable');
    }

    // Functions
    public function scopeSearch($query , $keywords)
    {
        $keywords = explode(' ',$keywords);
        foreach ($keywords as $keyword) {
            $query->where('title' , 'LIKE' , '%' . $keyword . '%')
                ->orWhereHas('categories' , function ($query) use ($keyword){
                    $query->where('name' , 'LIKE' , '%' . $keyword . '%' );
                })->orWhereHas('tags' , function ($query) use ($keyword){
                    $query->where('name' , 'LIKE' , '%' . $keyword . '%' );
                });
        }
        return $query;
    }
}
