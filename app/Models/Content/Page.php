<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected  $attributes = [
        'sort-order' => 0,
        'status'  => 0
    ];

    protected  $fillable = [
        'sort-order',
        'status'
    ];

    protected  $hidden = [];

    protected  $casts = [];
}
