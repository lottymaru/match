<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];
    
    public function posts()
    {
        return $this->hasMany(user::class, 'area', 'id');
    }
}
