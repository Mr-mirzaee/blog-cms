<?php

namespace App\Models;

use App\Traits\DataTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, DataTable;

    protected $fillable = [
        'user_id',
        'parent_id',
        'text',
        'approved',
        'commentable_id',
        'commentable_type'
    ];

    public function isApproved()
    {
        return (bool) $this->approved;
    }

    // Relations
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'parent_id' , 'id');
    }
}
