<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'orderDetails.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'product_id' => 'required|array',
            'product_id.*' => 'required|exists:products,id',
            'jumlah' => 'required|array',
            'jumlah.*' => 'required|integer|min:1',
        ]);

        $user = User::firstOrCreate(
            ['name' => $request->nama_pemesan],
            ['email' => strtolower(str_replace(' ', '', $request->nama_pemesan)) . '@customer.com', 'password' => bcrypt('customer123')]
        );

        $total = 0;
        foreach ($request->product_id as $i => $productId) {
            $product = Product::find($productId);
            $total += $product->harga * $request->jumlah[$i];
        }

        $order = Order::create([
            'user_id' => $user->id,
            'tanggal_pesan' => now(),
            'status' => 'pending',
            'total_harga' => $total,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        foreach ($request->product_id as $i => $productId) {
            $product = Product::find($productId);
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'jumlah' => $request->jumlah[$i],
                'harga_saat_beli' => $product->harga,
            ]);
        }

        return redirect('/orders');
    }
}