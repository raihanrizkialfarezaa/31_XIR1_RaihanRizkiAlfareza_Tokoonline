<?php

namespace App\Http\Livewire;

use App\Models\Liga;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $product = Product::take(4)->get();
        $ligas = Liga::all();
        return view('livewire.home', compact('product', 'ligas'))
        ->extends('layouts.app')
        ->section('content');
    }
}
