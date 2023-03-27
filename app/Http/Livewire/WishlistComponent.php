<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;
class WishlistComponent extends Component
{
    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id==$product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-icon-component', 'refreshComponent');
                return;
            }
        }
    }

    public function restoreCart($identifier){ Cart::restore($identifier); }

    public function render()
    {
        // $cart = Cart::instance('wishlist')->restore(auth()->user()->id);
        // dd($this->restoreCart(auth()->user()->id));
        return view('livewire.wishlist-component');
    }
}
