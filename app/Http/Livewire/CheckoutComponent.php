<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\transaksi;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
    // public $carts;
    // public function mount($carts){
    //     $this->carts = $carts;
    // }

    
    public function storeCheckout(){
        $carts = Cart::instance('cart')->content();
        foreach($carts as $cart){
            $product = Product::find($cart->model->id);
            $penjual = User::find($product->user_id);
            // dd($penjual);
            $transaksi = new transaksi();
            $transaksi->id_pembeli = auth()->user()->id;
            $transaksi->id_penjual = $penjual->id;
            $transaksi->product_id = $cart->model->id;
            $transaksi->jumlah = $cart->qty;
            $transaksi->harga = $product->regular_price;
            $subtotal = $cart->subtotal;
            $tax = $cart->taxRate;
            $transaksi->tax = $tax;
            $transaksi->harga_total = $subtotal + ($subtotal * $tax/100);
            $transaksi->save();
            $quantity = $product->quantity - $cart->qty;
            $product->quantity = $quantity;
            $product->save();
        }
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');
        // return redirect(route('shop.checkout'))->with('success', 'Selamat, Pesanan Anda Berhasil!');     
        session()->flash('success', 'Selamat, Pesanan Anda Berhasil!');
    }

    public function render()
    {
        return view('livewire.checkout-component');
    }    

}
