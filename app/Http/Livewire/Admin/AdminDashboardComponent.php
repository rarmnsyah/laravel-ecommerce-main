<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\transaksi;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteProduct(){
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message', 'Product has been deleted!');
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard-component', [
            'transaksis' => transaksi::where('id_penjual', auth()->user()->id)->orderBy('updated_at', 'DESC')->paginate(5),
            'products' => Product::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }
}
