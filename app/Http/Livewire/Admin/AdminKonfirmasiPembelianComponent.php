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
        // dd($transaksi->user->regency->name);
        // dd($transaksi->user);
        return view('livewire.admin.admin-konfirmasi-pembelian-component', [
            'transaksi' => $transaksi
        ]);
    }

    public function konfirmasiPenjualan(){
        $transaksi = transaksi::find($this->transaksi_id);
        $product = $transaksi->product;
        $transaksi->status = "Sedang Dikirim";
        $product->quantity -= $transaksi->qty;
        if ($product->quantity == 0){
            $product->stock_status = 'outofstock';
        }
        $transaksi->save();
        $product->save();

        return redirect(route('admin.dashboard', ['transaksi_id'=>$transaksi->id]))->with('success', 'Anda telah melakukan konfirmasi penjualan !');
    }
}
