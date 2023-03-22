<?php

namespace App\Http\Livewire;

use App\Models\transaksi;
use Livewire\Component;

class ViewMyAccount extends Component
{
    public function render()
    {
        return view('livewire.view-my-account', [
            'transaksis' => transaksi::where('id_penjual', auth()->user()->id)->paginate(5)
        ]);
    }
}
