<?php

namespace App\Http\Livewire;

use App\Models\Liga;
use App\Models\Product;
use Livewire\Component;

class ProductLiga extends Component
{
    public $search, $liga;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($id)
    {
        $ligadetail = Liga::find($id);

        if ($ligadetail) {
            $this->liga = $ligadetail;
        }
    }

    public function render()
    {   

        if ($this->search) {
            $products = Product::where('liga_id', $this->liga->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else{
            $products = Product::where('liga_id', $this->liga->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'produk' => $products,
            'title' => 'Jersey ' .$this->liga->nama
        ])->extends('layouts.app')
        ->section('content');
    }
}
