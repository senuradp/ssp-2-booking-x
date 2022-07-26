<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected  $attributes = [
        'sort_order' => 0,
        'status' => 1
    ];

    protected  $fillable = [
        'title',
        'url',
        'summary',
        'content',
        'sort-order',
        'status'
    ];

    protected  $hidden = [];

    protected  $casts = [];
}
