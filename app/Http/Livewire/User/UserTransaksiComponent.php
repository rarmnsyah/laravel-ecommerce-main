<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\transaksi;

class UserTransaksiComponent extends Component
{
    public $transaksi_id;

    public function mount($transaksi_id){
        $this->transaksi_id = $transaksi_id;
    }

    public function render()
    {
        $transaksi = transaksi::find($this->transaksi_id);
        // dd($transaksi->user);
        return view('livewire.user.user-transaksi-component', [
            'transaksi' => $transaksi
        ]);
    }

    public function konfirmasiPembelian(){
        $transaksi = transaksi::find($this->transaksi_id);
        $transaksi->status = "Pesanan Diterima";
        $transaksi->save();

        return redirect(route('user.comment', ['transaksi_id' => $transaksi->id]))->with('success', 'Selamat, Transaksi Anda Selesai !');
    }

}
