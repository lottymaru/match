<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
    ];

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}