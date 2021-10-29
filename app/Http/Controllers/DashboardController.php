<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $liga = Liga::all();
        $user = User::all();
        $pemasukan = Pesanan::whereIn('status', [2, 3, 4, 6])->sum('total_harga');
        // dd($pemasukan);
        $pesanan = Pesanan::count();
        return view('admin.admin', compact('products', 'liga', 'pesanan', 'user', 'pemasukan'));
    }
}
