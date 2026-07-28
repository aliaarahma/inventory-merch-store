<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Product::count();
        $totalKategori = Category::count();
        $totalPesanan = Order::count();
        $totalPendapatan = Order::where('status', 'completed')->sum('total_harga');
        $pesananTerbaru = Order::with('user')->latest()->take(5)->get();

        return view('dashboard', compact('totalProduk', 'totalKategori', 'totalPesanan', 'totalPendapatan', 'pesananTerbaru'));
    }
}