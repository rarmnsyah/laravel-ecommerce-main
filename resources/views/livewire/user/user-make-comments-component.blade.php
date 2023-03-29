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
                    <div class="col-lg-8">
                        <div class="single-page pr-30 mb-lg-0 mb-sm-5">
                            <div class="single-header style-2">
                                <h2>Product Comment & Review</h2>
                            </div>
                            <div class="single-content">
                                <div>
                                    <h4>Detail Produk</h4>
                                    <ul class="list-group list-group-flush  ">
                                        <li class="list-group-item">Nama : </li>
                                        <li class="list-group-item">Deskripsi :

                                        </li>
                                        <li class="list-group-item">Harga : $
                                        </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                            </div>
                            <form wire:submit.prevent="konfirmasiPembelian">
                                <button type="submit" disabled class="btn btn-primary">Terima Barang</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-page pr-30 mb-lg-0 mb-sm-5">
                            <div class="single-content">
                                <div>
                                    <h4>Detail Produk</h4>
                                    <ul class="list-group list-group-flush  ">
                                        <li class="list-group-item">Nama : </li>
                                        <li class="list-group-item">Deskripsi :

                                        </li>
                                        <li class="list-group-item">Harga : $
                                        </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
</div>
