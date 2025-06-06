<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
