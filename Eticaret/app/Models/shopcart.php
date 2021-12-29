<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopcart extends Model
{
    use HasFactory;
    protected $table='shopcarts';
    protected $fillable=[
        'user_id',
        'product_id',
        'product_quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
