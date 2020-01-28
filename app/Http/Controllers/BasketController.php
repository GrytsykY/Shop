<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();

        return view('basket', compact('order'));
    }

    public function basketPlace()
    {
        $basket = new Basket();
        $order = $basket->getOrder();

        if (!$basket->countAvailable()){
            session()->flash('warning','Tовар не доступен для заказа');
            return redirect()->route('basket');
        }

        return view('order', compact('order'));
    }

    public function basketAdd(Product $product)
    {
        //dd($product);
        $result = (new Basket('true'))->addProduct($product);

        if ($result){
            session()->flash('success', 'Добавлен товар ' . $product->name);
        } else {
            session()->flash('warning', 'Tовар ' . $product->name . ' в большем кол-ве не доступен для заказа');
        }

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        (new Basket())->removeProduct($productId);
        //dd((new Basket())->countAvailable());
        //Order::eraseOrderSum();
        $product= Product::find($productId);

        session()->flash('warning', 'Удален товар ' . $product->name);

        return redirect()->route('basket');
    }

    public function basketConfirm(Request $request)
    {
        $email = Auth::check() ? Auth::user()->email : $request->email;
        if ((new Basket())->saveOrder($request->name, $request->phone, $email)) {
            session()->flash('success', 'Ваш заказ принят на обработку');
        } else {
            session()->flash('warning', 'Tовар не доступен для заказа');
        }

        Order::eraseOrderSum();

        return redirect()->route('index');
    }
}
