<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class BasketNoEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            if ($order->prods->count() == 0) {
                session()->flash('succsess', 'Корзина пуста');
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}
