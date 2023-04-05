<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {

        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {

        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function destroy($id)
    {

        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed!');
    }

    public function clearAll()
    {

        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function render()
    {
        // dd($request->session()->get('cart')['wishlist']);
        return view('livewire.cart-component');
    }
}
