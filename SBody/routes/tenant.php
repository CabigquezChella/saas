<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        dd(\App\Models\User::all());
    });
    Route::get('/admin',[SessionController::class,'index']);
    Route::post('/admin', [SessionController::class,'store'])->name('admin');
    Route::get('/admin', [SessionController::class,'index'])->name('tent.tentpage');
   // Route::resource('/admin',[SessionController::class]);
    // // Route::get('/admin', [SessionController::class,'destroy'])->name('admin');
    // Route::get('/admin', [SessionController::class,'edit'])->name('admin');


});
