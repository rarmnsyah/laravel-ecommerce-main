<div>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach ($slides as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">{{ $slide->top_title }}</h4>
                                        <h2 class="animated fw-900">{{ $slide->title }}</h2>
                                        <h1 class="animated fw-900 text-brand">{{ $slide->sub_title }}</h1>
                                        <p class="animated">{{ $slide->offer }}</p>
                                        <a class="animated btn btn-brush btn-brush-3" href="{{ $slide->link }}"> Shop
                                            Now </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-1"
                                            src="{{ asset('assets/imgs/slider') }}/{{ $slide->image }}"
                                            alt="{{ $slide->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                type="button" role="tab" aria-controls="tab-two"
                                aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">New
                                added</button>
                        </li>
                    </ul>
                    <a href="{{ route('shop') }}" class="view-more d-none d-md-flex">View More<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($fproducts as $fproduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details', ['slug' => $fproduct->slug]) }}">
                                                    <img class="default-img"
                                                        src="{{ asset('assets/imgs/products') }}/{{ $fproduct->image }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a
                                                    href="{{ route('product.category', ['slug' => $fproduct->category->slug]) }}">
                                                    {{ $fproduct->category->name }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('product.details', ['slug' => $fproduct->slug]) }}">{{ $fproduct->name }}</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>${{ $fproduct->regular_price }} </span>
                                                <!-- <span class="old-price">$245.8</span> -->
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#"
                                                    wire:click.prevent="store({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i
                                                        class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach ($pproducts as $pproduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$pproduct->image}}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up"
                                                    href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">{{ $pproduct->category_name}} </a>
                                            </div>
                                            <h2><a href="product-details.html">{{ $pproduct->name }}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$ {{ $pproduct->regular_price }} </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up"
                                                    href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-2-1.jpg"
                                                    alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Donec ut nisl rutrum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-3-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam dapibus pharetra</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-4-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-4-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Watch</a>
                                        </div>
                                        <h2><a href="product-details.html">Morbi dictum finibus</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-5-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-5-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Nunc volutpat massa</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-6-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-6-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Speaker</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam ultricies luctus</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-7-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-7-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Camera</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam mattis enim</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-8-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-8-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Phone</a>
                                        </div>
                                        <h2><a href="product-details.html">Vivamus sollicitudin</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-9-1.jpg"
                                                    alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-9-2.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html"> Donec ut nisl rutrum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Categories</span> </h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows">
                    </div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach ($pcategories as $pcategory)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{ route('product.category', ['slug' => $pcategory->slug]) }}"><img
                                            src="{{ asset('assets/imgs/categories') }}/{{ $pcategory->image }}"
                                            alt="{{ $pcategory->name }}"></a>
                                </figure>
                                <h5><a
                                        href="{{ route('product.category', ['slug' => $pcategory->slug]) }}">{{ $pcategory->name }}</a>
                                </h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach ($lproducts as $lproduct)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.details', ['slug' => $lproduct->slug]) }}">
                                            <img class="default-img"
                                                src="{{ asset('assets/imgs/products') }}/{{ $lproduct->image }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a
                                            href="{{ route('product.details', ['slug' => $lproduct->slug]) }}">{{ $lproduct->name }}</a>
                                    </h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>${{ $lproduct->regular_price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
