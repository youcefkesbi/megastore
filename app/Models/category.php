<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
