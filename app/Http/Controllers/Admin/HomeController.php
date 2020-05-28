<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        return view('admin.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('auth.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        //dd($good->images()->get('iamge')->pluck('iamge')->all());

        $order->prods()->wherePivot('order_id', $order->id)->detach();
        $order->delete();
        return redirect()->route('admin.index');
    }
}
