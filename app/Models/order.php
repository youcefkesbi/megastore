<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'total_price',
        'status',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
