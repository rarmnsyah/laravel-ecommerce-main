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
                            @if ($transaksi->status == 'Sedang Dikirim')
                                <form wire:submit.prevent="konfirmasiPembelian">
                                    <button type="submit" class="btn btn-primary">Terima Barang</button>
                                </form>
                            @else
                                <form wire:submit.prevent="konfirmasiPembelian">
                                    <button type="submit" disabled class="btn btn-primary">Terima Barang</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search…">
                                        <button type="submit"> <i class="fi-rs-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!--Widget categories-->
                            <div class="sidebar-widget widget_categories mb-40">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Categories</h5>
                                </div>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul>
                                        <li class="cat-item cat-item-2"><a href="blog.html">Beauty</a> (3)</li>
                                        <li class="cat-item cat-item-3"><a href="blog.html">Book</a> (6)</li>
                                        <li class="cat-item cat-item-4"><a href="blog.html">Design</a> (4)</li>
                                        <li class="cat-item cat-item-5"><a href="blog.html">Fashion</a> (3)</li>
                                        <li class="cat-item cat-item-6"><a href="blog.html">Lifestyle</a> (6)</li>
                                        <li class="cat-item cat-item-7"><a href="blog.html">Travel</a> (2)</li>
                                    </ul>
                                </div>
                            </div>
                            <!--Widget latest posts style 1-->
                            <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Trending Now</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/blog-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h4 class="post-title mb-10 text-limit-2-row">The litigants on the screen are not actors </h4>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/blog-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">Water Partners With Rag &amp; Bone To Consume</h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/blog-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">The loss is not all that surprising</h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/blog-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">We got a right to pick a little fight, Bonanza </h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/blog-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">My entrance exam was on a book of matches </h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Widget ads-->
                            <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                                <img src="assets/imgs/banner/banner-11.jpg" alt="">
                                <div class="banner-text">
                                    <span>Women Zone</span>
                                    <h4>Save 17% on <br>Office Dress</h4>
                                    <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--Widget Tags-->
                            <div class="sidebar-widget widget_tags mb-50">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Popular tags </h5>
                                </div>
                                <div class="tagcloud">
                                    <a class="tag-cloud-link" href="blog.html">beautiful</a>
                                    <a class="tag-cloud-link" href="blog.html">New York</a>
                                    <a class="tag-cloud-link" href="blog.html">droll</a>
                                    <a class="tag-cloud-link" href="blog.html">intimate</a>
                                    <a class="tag-cloud-link" href="blog.html">loving</a>
                                    <a class="tag-cloud-link" href="blog.html">travel</a>
                                    <a class="tag-cloud-link" href="blog.html">fighting </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>
    </main>
</div>
