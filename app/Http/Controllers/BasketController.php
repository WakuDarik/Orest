<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Prods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{

    public function basket()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            return view('basket', compact('order', 'categories'));
        } else {
            session()->flash('succsess', 'Корзина пуста');
            return redirect()->route('index');
        }
    }
    public function order()
    {
        $categories = Category::get();

        return view('order');
    }

    public function confirm(Request $request)
    {
        $categories = Category::get();

        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $succsess = $order->saveOrder($request->name, $request->phone);
        if ($succsess) {
            session()->flash('succsess', 'Ваш заказ принят в обработку');
        } else {
            session()->flash('warning', 'This warning');
        }
        return redirect()->route('index');
    }

    public function basketAdd($goodsId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->prods->contains($goodsId)) {
            $pivotRow = $order->prods()->where('prods_id', $goodsId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->prods()->attach($goodsId);
        }
        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }
        $goods = Prods::find($goodsId);
        session()->flash('succsess', 'Добавлен товар: ' . $goods->name);
        return redirect()->route('basket');
    }
    public function oneClickOrder(Request $request, $goodsId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->prods->contains($goodsId)) {
            $pivotRow = $order->prods()->where('prods_id', $goodsId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->prods()->attach($goodsId);
        }
        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }

        $order = Order::find($orderId);

        $succsess = $order->saveOrder($request->name = 'Быстрый заказ', $request->phone);

        if ($succsess) {
            session()->flash('succsess', 'Ваш заказ принят в обработку');
        } else {
            session()->flash('warning', 'This warning');
        }
        return redirect()->route('index');
    }

    public function basketRemove($goodsId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->prods->contains($goodsId)) {
            $pivotRow = $order->prods()->where('prods_id', $goodsId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->prods()->detach($goodsId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        } else {
            $order->prods()->detach($goodsId);
        }
        $goods = Prods::find($goodsId);
        session()->flash('succsess', 'Удален товар: ' . $goods->name);
        return redirect()->route('basket');
    }
}
