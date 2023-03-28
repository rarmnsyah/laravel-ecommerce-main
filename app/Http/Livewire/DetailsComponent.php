<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function addToWishList($user_id ,$product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        // Cart::instance('wishlist')->store($user_id, $product_id,$product_name,1,$product_price);
        $this->emitTo('wish-list-icon-component', 'refreshComponent');
    }

    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id==$product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-icon-component', 'refreshComponent');
                return;
            }
        }
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
        return view('livewire.details-component', ['product'=>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts, 'cart'=>$cart, 'categories'=>Category::latest()->take(5)->get()]);
    }
}
