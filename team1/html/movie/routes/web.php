<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\JangbuiController;
use App\Http\Controllers\FindproductController;
use App\Http\Controllers\PlayingController;
use App\Http\Controllers\Playing_timeController;
use App\Http\Controllers\FindreservedController;
use App\Http\Controllers\StroeControllerUser;
use App\Http\Controllers\MovieControllerUser;
use App\Http\Controllers\TicketingControllerUser;
use App\Http\Controllers\InformationControllerUser;
use App\Http\Controllers\SeatsControllerUser;
use App\Http\Controllers\PaymentControllerUser;
use App\Http\Controllers\UserMainController;
use App\Http\Controllers\LoginControllerUser;
use App\Http\Controllers\SignupControllerUser;
use App\Http\Controllers\MypageControllerUser;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MapControllerUser;
use App\Http\Controllers\TeaserControllerUser;

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

Route::get('/admin', function () {
    return view('admin_main');
});

Route::get('/', function () {
    return view('main.index');
});

Route::post('loginuser/check', [LoginControllerUser::class, 'check']);
Route::get('loginuser/logout', [LoginControllerUser::class, 'logout']);
Route::resource('movie', MovieController::class );
Route::resource('member', MemberController::class );
Route::resource('theater', TheaterController::class );
Route::resource('room', RoomController::class );
Route::resource('food', FoodController::class );
Route::resource('drink', DrinkController::class );
Route::resource('reserveds', ReserveController::class );
Route::resource('jangbui', JangbuiController::class );
Route::resource('playing', PlayingController::class );
Route::resource('playing_time', Playing_timeController::class );
Route::resource('findproduct', FindproductController::class );
Route::resource('findreserved', FindreservedController::class );
Route::resource('storeuser', StroeControllerUser::class );
Route::resource('movieuser', MovieControllerUser::class );
Route::resource('ticketinguser', TicketingControllerUser::class );
Route::resource('informationuser', InformationControllerUser::class );
Route::resource('seatsuser', SeatsControllerUser::class );
Route::resource('paymentuser', PaymentControllerUser::class );
Route::resource('main', UserMainController::class );
Route::resource('loginuser', LoginControllerUser::class );
Route::resource('signupuser', SignupControllerUser::class );
Route::resource('mypageuser', MypageControllerUser::class );
Route::resource('event', EventController::class );
Route::resource('map', MapControllerUser::class );
Route::resource('teaseruser', TeaserControllerUser::class );