<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Feature extends Component
{
    public function render()
    {
        $product=Product::all();
        return view('livewire.feature',['product'=>$product]);
    }
}
