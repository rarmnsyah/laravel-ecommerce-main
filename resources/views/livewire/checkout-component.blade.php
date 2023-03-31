<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">{{ session('success')}}</div>
                    @elseif (Session::has('failed'))
                        <div class="alert alert-danger" role="alert"><a href="{{route('user.dashboard', ['user_id' => auth()->user()->id])}}">{{ Session('failed') }}</a></div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('cart')->content() as $cart)
                                            <tr>
                                                <td class="image product-thumbnail"><img
                                                        src="{{ asset('assets/imgs/products') }}/{{ $cart->model->image }}"
                                                        alt="#"></td>
                                                <td>
                                                    <h5><a href="product-details.html">{{ $cart->model->name }}</a>
                                                    </h5> <span class="product-qty"> x{{ $cart->qty }}</span>
                                                </td>
                                                <td>{{ $cart->subtotal }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2">{{ Cart::subtotal() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax</th>
                                            <td class="product-subtotal" colspan="2">{{ Cart::tax() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td colspan="2"><em>Free Shipping</em></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span
                                                    class="font-xl text-brand fw-900">{{ Cart::total() }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-20">
                            <h5>Additional information</h5>
                        </div>
                        <div class="form-group mb-30">
                            <textarea rows="5" placeholder="Order notes" name ="information" wire:model = "information"></textarea>
                        </div>
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment : Default COD (Cash On Delivery)</h5>
                            </div>
                        </div>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio"
                                    name="payment_option" id="exampleRadios3">
                                <label class="form-check-label" for="exampleRadios3"
                                    data-bs-toggle="collapse" data-target="#cashOnDelivery"
                                    aria-controls="cashOnDelivery">Cash On Delivery</label>
                            </div>
                        </div>
                        <form wire:submit.prevent="storeCheckout">
                            <button type="submit" class="btn btn-fill-out btn-block mt-10">Place Order</button>
                        </form>

                        {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
