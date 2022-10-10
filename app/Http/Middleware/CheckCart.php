<?php

namespace App\Http\Middleware;

use App\Repositories\Orders\CartRepository;
use Closure;

class CheckCart
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
        $buy_now_cart_id = session('buy_now_cart_id');
        if($request->cart_type == 'buy-now' && $buy_now_cart_id){
            CartRepository::setCartID($buy_now_cart_id);
        }
        CartRepository::checkCartID($request);
        return $next($request);
    }

}
