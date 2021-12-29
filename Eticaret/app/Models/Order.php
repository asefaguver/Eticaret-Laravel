<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table= 'orders';
    protected $fillable=[
        'name',
        'email',
        'address',
        'total',
        'user_id',
    ];
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderitem()
    {
        return $this->hasMany(Orederitem::class);
    }
}
