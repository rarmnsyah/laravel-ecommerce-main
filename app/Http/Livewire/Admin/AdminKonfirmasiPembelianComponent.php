<?php

namespace App\Http\Livewire\Admin;

use App\Models\transaksi;
use Livewire\Component;

class AdminKonfirmasiPembelianComponent extends Component
{
    public $transaksi_id;

    public function mount($transaksi_id){
        $this->transaksi_id = $transaksi_id;
    }

    public function render()
    {
        $transaksi = transaksi::find($this->transaksi_id);
        // dd($transaksi);
        return view('livewire.admin.admin-konfirmasi-pembelian-component', [
            'transaksi' => $transaksi
        ]);
    }
}
