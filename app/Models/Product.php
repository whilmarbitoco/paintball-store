<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'user_id', 'type', 'image_url', 'quantity'
    ];


    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
