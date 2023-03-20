<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProsesTransaksiComponent extends Component
{
    public function render()
    {
        // dd(Cart::instance('cart'));
        return view('livewire.proses-transaksi-component');
    }
}
