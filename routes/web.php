<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Livewire\Admin\AdminComponent;
use App\Http\Livewire\CatalogComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\ProfileUserComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/email/verify', function () {
    return view('livewire.verify-email');
})->middleware('auth')->name('verification.notice');

require __DIR__.'/auth.php';

Route::get('/auth/google', [SocialController::class, 'googleRedirect'])->name('auth.google');
Route::get('/auth/google/callback', [SocialController::class, 'loginWithGoogle']);

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/profile', ProfileUserComponent::class)->name('user.profile');
    Route::get('/user/edit-profile', UserEditProfileComponent::class)->name('user.editprofile');
    Route::get('/user/change-password', UserChangePasswordComponent::class)->name('user.changepassword');
});

Route::get('/', HomeComponent::class);
Route::get('/catalog', CatalogComponent::class)->name('catalog');


Route::middleware('admin')->prefix('admin_panel')->group(function() {
    Route::get('/', AdminComponent::class)->name('admin.admin_panel');
});
