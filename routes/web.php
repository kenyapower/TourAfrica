<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


    Route::post('/register',    [RegisterController::class, 'create']);

    //getting an invoice
    Route::get('invoice',       [InvoiceController::class, 'clientinvoice'])->name('client.invoice');
    Route::post('search',       [InvoiceController::class, 'search'])->name('search');


//clientcontroller routes start
    Route::get('fleetlisting',          [ClientController::class, 'ourFleet'])->name('client.ourFleet');
    Route::post('Book',                 [ClientController::class, 'Book'])->name('client.Book');
//clientcontroller routes end


Route::group(['middleware' => 'prevent-back-history'],function(){
//siteController routes starts
    Route::get('/dash_index',   [SiteController::class, 'dashindex'])->name('site.dashindex')->middleware('auth');
    Route::get('/drivers',      [SiteController::class, 'allDrivers'])->name('site.drivers')->middleware('auth');
    Route::get('/fleet',        [SiteController::class, 'fleet'])->name('site.fleet')->middleware('auth');
    Route::get('/invoices',     [SiteController::class, 'invoices'])->name('site.invoices')->middleware('auth');
//siteController routes end

//DriverController Routes Starts
    Route::get('/myProfile/{usercode}',                 [DriverController::class, 'myProfile'])->name('site.myProfile')->middleware('auth');
    Route::get('/myVehicles',                           [DriverController::class, 'myvehicles'])->name('site.myvehicles')->middleware('auth');
    Route::get('/myinvoices',                           [DriverController::class, 'myinvoices'])->name('site.myinvoices')->middleware('auth');
    Route::post('/myProfile/addAss',                    [DriverController::class, 'addAss'])->name('site.addAss')->middleware('auth');
    Route::post('/myProfile/addVehicle',                [DriverController::class, 'addVehicle'])->name('site.addVehicle')->middleware('auth');
    Route::post('/myProfile/updatePass/{usercode}',     [DriverController::class,'updatePass'])->name('site.update')->middleware('auth');
    Route::post('/myProfile/deleteAcc/{usercode}',      [DriverController::class,'deleteAcc'])->name('site.deleteAcc')->middleware('auth');
//DriverController Routes ends

//invoicecontroller starts
    Route::get('/invoicedetails/{invoiceNumber}', [InvoiceController::class, 'invoicedetails'])->name('invoice.details')->middleware('auth');

//invoicecontroller ends

});


