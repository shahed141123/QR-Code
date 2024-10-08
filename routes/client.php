<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QrCodeController;
use App\Http\Controllers\Admin\BarCodeController;
use App\Http\Controllers\Admin\NfcCardController;
use App\Http\Controllers\Admin\VirtualCardController;
use App\Http\Controllers\RestaurantCategoryController;
use App\Http\Controllers\Subscription\SubscriptionController;




Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::resources(
        [
            'qr-code'             => QrCodeController::class,
            'nfc-card'            => NfcCardController::class,
            'virtual-card'        => VirtualCardController::class,
            'barcode'             => BarCodeController::class,
            'restaurant-category' => RestaurantCategoryController::class,
        ],
    );

    Route::controller(SubscriptionController::class)->group(function () {
        Route::get('/subscribe/plans', 'showSubscriptionForm')->name('subscribe');
        Route::get('/subscribe/{id}', 'subscribe')->name('subscribe.post');
        Route::post('subscription', 'subscription')->name("subscription.create");
        Route::post('/cancel-subscription', 'cancelSubscription')->name('cancel-subscription');
        Route::get('stripe/checkout', 'stripeCheckout')->name('stripe.checkout');
        Route::get('stripe/checkout/success', 'stripeCheckoutSuccess')->name('stripe.checkout.success');
    });
    Route::post('restaurant-category/edit', [RestaurantCategoryController::class, 'categoryEdit'])->name('editCategory');
    Route::post('/restaurant-category/destroy', [RestaurantCategoryController::class, 'destroyCategory'])->name('restaurant-category.destroy');

    Route::get('qrcode/summary/{id}', [QrCodeController::class, 'qrSummary'])->name('qr.summary');
    Route::get('template/qrcode', [QrCodeController::class, 'qrTemplate'])->name('qr.template');
    Route::get('template/nfc-card', [VirtualCardController::class, 'nfcTemplate'])->name('nfc.template');
    Route::post('single-barcode/store', [BarCodeController::class, 'store'])->name('single-barcode.store');
    Route::post('bulk-barcode/store', [BarCodeController::class, 'bulkStore'])->name('bulk-barcode.store');

    Route::post('/update-nfc-session', [NfcCardController::class, 'updateNFCTemplateSession'])->name('updateNfcSession');
});
Route::post('user/qrcode/preview', [QrCodeController::class, 'qrPreview'])->name('user.qr.preview');
Route::get('/{Qr}', [QrCodeController::class, 'showQr'])->name('showQr');
 