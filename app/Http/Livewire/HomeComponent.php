<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;


class HomeComponent extends Component
{
    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to cart!');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $slides = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $fproducts = Product::where('featured',1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular',1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', ['slides'=>$slides, 'lproducts'=>$lproducts, 'fproducts'=>$fproducts, 'pcategories'=>$pcategories]);
    }
}
