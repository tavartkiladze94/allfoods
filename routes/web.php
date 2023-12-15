<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\FoodsController;
use App\Http\Controllers\Main\FoodsMainController;
use App\Http\Middleware\User;
Route::group(['middleware' => ['user'], 'prefix' => 'admin'], function(){
      
    Route::get('/login', [LoginController::class, 'login'])->withoutMiddleware([User::class])->name('login');
    Route::post('/check', [LoginController::class, 'check'])->withoutMiddleware([User::class])->name('check');
    Route::resource('foods', FoodsController::class);


});

    Route::get('/{id?}', [FoodsMainController::class, 'index'])->name('MainPage');
    Route::get('/food_info/{id}', [FoodsMainController::class, 'food_info'])->name('FoodInfo');
    





Route::get('/locale/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ka', 'ru'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('ChangeLocale');


 Route::fallback(function () {
    echo "გვერდი ვერ მოიძებნა";
});