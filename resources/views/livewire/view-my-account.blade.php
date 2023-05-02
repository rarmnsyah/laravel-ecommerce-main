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
                                                aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address"
                                                role="tab" aria-controls="address" aria-selected="true"><i
                                                    class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="nav-link"
                                                    onclick="event.preventDefault(); this.closest('form').submit();"><i
                                                        class="fi-rs-sign-out mr-10"></i>Logout</a>
                                            </form>
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
                                        @endif
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Your Orders</h5>
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
                                                                    <td><a href="{{ route('user.transaksi', ['transaksi_id' => $transaksi->id]) }}"
                                                                            class="btn-small d-block">View</a>
                                                                        @if ($transaksi->status === 'Pesanan Diterima')
                                                                            <a href="{{ route('user.comment', ['transaksi_id' => $transaksi->id]) }}"
                                                                                class="btn-small d-block">Comment</a>
                                                                        @endif
                                                                    </td>
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
                                    <div class="tab-pane fade" id="address" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="row">
                                            @if (isset(auth()->user()->alamat) or isset(auth()->user()->regency) or isset(auth()->user()->province))
                                                <div class="col-lg-6">
                                                    <div class="card mb-3 mb-lg-0">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Billing Address</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <address>{{ auth()->user()->alamat }}<br>
                                                                {{ auth()->user()->regency->name }},
                                                                <br>{{ auth()->user()->province->name }}, <br>
                                                                {{ auth()->user()->kode_pos }}
                                                            </address>
                                                            <a href="{{ route('user.dashboard', ['user_id' => auth()->user()->id]) }}"
                                                                class="btn-small">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (auth()->user()->utype === 'ADM')
                                                    <div class="col-lg-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">Shipping Address</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <address>4299 Express Lane<br>
                                                                    Sarasota, <br>FL 00000 USA <br>Phone: 1.000.000.0000
                                                                </address>
                                                                <p>Sarasota</p>
                                                                <a href="#" class="btn-small">Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @else
                                                <div class="card-header">
                                                    <h5 class="mb-0">Hello {{ auth()->user()->name }}! </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p>From your account dashboard. you can easily check &amp;
                                                        view your <a href="#">recent orders</a>, manage
                                                        your <a href="#">shipping and billing
                                                            addresses</a> and <a href="#">edit your
                                                            password and account details.</a></p>
                                                </div>
                                            @endif
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
