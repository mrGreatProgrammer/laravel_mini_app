<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'phone',
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'product_id');
    }
}
