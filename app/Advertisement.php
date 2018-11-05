<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author_name'
    ];
    protected $dates = [
        'created_at'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_name', 'username');
    }
}
