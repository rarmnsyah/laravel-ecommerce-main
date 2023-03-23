<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home.index') }}" rel="nofollow">Home</a>
                    <span></span> <a href="{{ route('user.myaccount') }}">Admin</a>
                    <span></span> Transaksi
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-page pr-30 mb-lg-0 mb-sm-5">
                            <div class="single-header style-2">
                                <h2>Detail Transaksi</h2>
                            </div>
                            <div class="single-content">
                                <div>
                                    <h4>Detail Pembeli</h4>
                                    <ul class="list-group list-group-flush  ">
                                        <li class="list-group-item">Nama : {{ $transaksi->user->name }}</li>
                                        <li class="list-group-item">Email : {{ $transaksi->user->email }}</li>
                                        <li class="list-group-item">Jenis Kelamin :
                                            {{ $transaksi->user->jenis_kelamin }}
                                        </li>
                                        <li class="list-group-item">Alamat : {{ $transaksi->user->alamat }}
                                            {{ $transaksi->user->kabupaten }} {{ $transaksi->user->provinsi }}</li>

                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Detail Produk</h4>
                                    <ul class="list-group list-group-flush  ">
                                        <li class="list-group-item">Nama : {{ $transaksi->product->name }}</li>
                                        <li class="list-group-item">Deskripsi :
                                            {{ $transaksi->product->short_description }}
                                        </li>
                                        <li class="list-group-item">Harga : $ {{ $transaksi->product->regular_price }}
                                        </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Detail Invoice</h4>
                                    <ul class="list-group list-group-flush  ">
                                        <li class="list-group-item">Waktu Pembelian : {{ $transaksi->created_at }}</li>
                                        <li class="list-group-item">Status : {{ $transaksi->status }}</li>
                                        <li class="list-group-item">Banyak Pembelian : {{ $transaksi->jumlah }}</li>
                                        <li class="list-group-item">Harga Total : $ {{ $transaksi->harga_total }}</li>
                                        <li class="list-group-item">Metode Pembayaran : COD </li>
                                        <li class="list-group-item">Metode Pengiriman : COD </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                                <p>If you have any questions about these Terms, please <a href="contact.html">contact
                                        us</a>.</p>
                            </div>
                            @if ($transaksi->status == 'Sedang Dikemas')
                                <form wire:submit.prevent="konfirmasiPembelian">
                                    <button type="submit" class="btn btn-primary">Konfirmasi Pembelian</button>
                                </form>
                            @else
                                <form wire:submit.prevent="konfirmasiPembelian">
                                    <button type="submit" disabled class="btn btn-primary">Konfirmasi Pembelian</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
