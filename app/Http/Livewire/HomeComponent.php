<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\transaksi;
use App\Models\HomeSlider;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Database\Eloquent\Builder;

class HomeComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to cart!');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        // $pproducts = DB::table('products')
        //     ->join('transaksis', 'transaksis.product_id', '=', 'products.id')
        //     ->select(DB::raw("product_id, SUM(jumlah) as total"))
        //     ->orderBy("total", "DESC")
        //     ->limit(10)
        //     ->get();
        // if (Auth::check()) {
        //     Cart::instance('cart')->restore(Auth::user()->email);
        // }

        $pproducts = DB::table('transaksis')
            ->join('products', 'transaksis.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select(DB::raw("products.image as image, products.name as name, categories.name as category_name, regular_price, SUM(jumlah) as total"))
            ->groupBy('product_id')
            ->orderBy("total", "DESC")
            ->limit(10)
            ->get();

        // dd($pproducts);
        $slides = HomeSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $fproducts = Product::where('featured', 1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::all();
        return view('livewire.home-component', ['slides' => $slides, 'lproducts' => $lproducts, 'fproducts' => $fproducts, 'pcategories' => $pcategories, 'pproducts' => $pproducts]);
    }
}
