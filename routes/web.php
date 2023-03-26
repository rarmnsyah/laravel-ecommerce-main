<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ViewMyAccount;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Controllers\Auth\ChangeUserType;
use App\Http\Livewire\ProsesTransaksiComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminAddHomeSlideComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditHomeSlideComponent;
use App\Http\Livewire\Admin\AdminKonfirmasiPembelianComponent;
use App\Http\Livewire\Admin\AdminNotifikasiComponent;
use App\Http\Livewire\FAQComponent;
use App\Http\Livewire\User\UserTransaksiComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', HomeComponent::class)->name('home.index');

Route::get('/shop', ShopComponent::class)->name('shop');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/faq', FAQComponent::class)->name('faq');

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/edit',[ChangeUserType::class, 'index'])->name('user.show');
    Route::post('/user/edit/{user:id}',[ChangeUserType::class, 'update']);
    Route::get('/user/myAccount', ViewMyAccount::class)->name('user.myaccount');
    Route::get('/cart', CartComponent::class)->name('shop.cart');
    Route::get('/wishlist', WishlistComponent::class)->name('shop.wishlist');
    Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');
    Route::get('/user/transaksi/{transaksi_id}', UserTransaksiComponent::class)->name('user.transaksi');
});

Route::middleware(['auth', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('admin/slider/', AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('admin/slider/add', AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('admin/slider/edit/{slide_id}', AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');
    Route::get('admin/transaksi/{transaksi_id}', AdminKonfirmasiPembelianComponent::class)->name('admin.transaksi');
    // Route::get('admin/notifikasi', AdminNotifikasiComponent::class)->name('admin.notifikasi');
});

require __DIR__.'/auth.php';
