<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\transaksi;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component', [
            'transaksis' => transaksi::where('id_penjual', auth()->user()->id)->orderBy('updated_at', 'DESC')->paginate(5),
            'products' => Product::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }
}
