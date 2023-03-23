<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transaksi(){
        return $this->hasMany(transaksi::class);
    }
}
