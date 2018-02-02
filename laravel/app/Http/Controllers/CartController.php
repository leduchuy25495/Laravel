<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use Cart;
class CartController extends Controller
{
    
    public function cart()
    {
       if (Request::isMethod('post')) {
            $this->data['title'] = 'Giỏ hàng của bạn';
            $sanpham_id = Request::get('sanpham_id');
            $sanpham = sanpham::find($sanpham_id);
            $cartInfo = [
                'id' => $sanpham_id,
                'name' => $sanpham->tensp,
                'price' => $sanpham->giaban,
                'qty' => '1'
            ];
            Cart::add($cartInfo);
        }
        $cart = Cart::content();
        $this->data['cart'] = $cart;

        return view('layouts.cart', $this->data);
       
    }
}
