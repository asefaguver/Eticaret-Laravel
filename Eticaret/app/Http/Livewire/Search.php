<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\shopcart;
use App\Models\Product;
use App\Models\User;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $dataList=Product::where('title', 'like', '%'.$this->search.'%' )->get();
        return view('livewire.search', ['datalist'=>$dataList, 'query'=>$this->search]);
    }
}
