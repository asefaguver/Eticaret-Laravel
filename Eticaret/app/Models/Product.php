<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'keywords', 'description','slug','status','price','quantity','image','minquantity','tax','detail','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function shopcart()
    {
        return $this->hasMany(shopcart::class);
    }
    
    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);
    }
}
