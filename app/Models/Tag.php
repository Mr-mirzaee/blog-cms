<?php

namespace App\Models;

use App\Traits\DataTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, DataTable;

    protected $fillable = [
        'name',
        'slug'
    ];

    // Relations
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'tagable');
    }
}
