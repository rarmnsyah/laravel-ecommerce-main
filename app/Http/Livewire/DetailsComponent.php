<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function store($user_id, $product_id, $product_name, $product_price){
        // Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        // Cart::instance($user_id)->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        // Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product')->store($user_id);
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        // Cart::store($user_id, $product_id, $product_name, 1, $product_price);
        session()->flash('success_message', 'Item added to cart!!');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $rproducts = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        // $cart = Cart::restore(auth()->user()->id);
        $cart = Cart::restore(1);
        return view('livewire.details-component', ['product'=>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts, 'cart'=>$cart]);
    }
}
