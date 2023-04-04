<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> My Account
                </div>
            </div>
        </div>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="orders-tab" data-bs-toggle="tab"
                                                href="#orders" role="tab" aria-controls="orders"
                                                aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Produk
                                                Dipesan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="produk-tab" data-bs-toggle="tab" href="#produk"
                                                role="tab" aria-controls="produk" aria-selected="true"><i
                                                    class="fi-rs-user mr-10"></i>List Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="alamat-tab" data-bs-toggle="tab" href="#alamat"
                                                role="tab" aria-controls="alamat" aria-selected="true"><i
                                                    class="fi-rs-user mr-10"></i>Alamat Toko</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="orders" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('success') }}</div>
                                        @elseif (Session::has('failed'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session::get('failed') }}</div>
                                        @endif
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Daftar Produk Dipesan</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Product</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($transaksis as $transaksi)
                                                                <tr>
                                                                    <td>{{ $transaksi->id }}</td>
                                                                    <td>{{ $transaksi->created_at->format('Y-m-d') }}
                                                                    </td>
                                                                    <td>{{ $transaksi->product->name }}</td>
                                                                    <td>{{ $transaksi->status }}</td>
                                                                    <td>${{ $transaksi->harga }} for
                                                                        {{ $transaksi->jumlah }} items</td>
                                                                    <td><a href="{{ route('admin.transaksi', ['transaksi_id' => $transaksi->id]) }}"
                                                                            class="btn-small d-block">View</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                                    {{ $transaksis->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="produk" role="tabpanel"
                                        aria-labelledby="produk-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        All products
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="{{ route('admin.product.add')}}" class="btn btn-success float-end">Add New Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Image</th>
                                                                <th>Name</th>
                                                                <th>Stock</th>
                                                                <th>Price</th>
                                                                <th>Category</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $i = ($products->currentPage()-1)*$products->perPage();
                                                            @endphp
                                                            @foreach($products as $product)
                                                                @if ($product->user_id == auth()->user()->id)
                                                                    <tr>
                                                                        <td>{{++$i}}</td>
                                                                        <td><img src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}" width="60" /></td>
                                                                        <td>{{$product->name}}</td>
                                                                        <td>{{$product->stock_status}}</td>
                                                                        <td>{{$product->regular_price}}</td>
                                                                        <td>{{$product->category->name}}</td>
                                                                        <td>{{$product->created_at}}</td>
                                                                        <td>
                                                                            <a href="{{ route('admin.product.edit', ['product_id'=>$product->id])}}" class="text-info">Edit</a>
                                                                            <a href="#" onclick="deleteConfirmation({{$product->id}})" class="text-danger">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                                    {{ $products->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="alamat" role="tabpanel"
                                        aria-labelledby="alamat-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Already have an account? <a href="login.html">Log in instead!</a>
                                                </p>
                                                <form method="post" name="enq">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="name" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="phone">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Display Name <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="dname" type="text">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email Address <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="email" type="email">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Current Password <span
                                                                    class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="password" type="password">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>New Password <span class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="npassword" type="password">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Confirm Password <span
                                                                    class="required">*</span></label>
                                                            <input required="" class="form-control square"
                                                                name="cpassword" type="password">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-fill-out submit"
                                                                name="submit" value="Submit">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
