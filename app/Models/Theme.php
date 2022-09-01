<?php

namespace App\Models;

use App\Traits\DataTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory, DataTable;

    protected $fillable = [
        'name',
        'slug',
        'size',
        'file',
        'images',
        'active'
    ];

    public function isActive()
    {
        return (bool) $this->active;
    }
}
