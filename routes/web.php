<?php
use App\Http\Controllers;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\RoomController;
use App\UserType;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('welcome');});

Route::get('about', function () {return view('about');});
Route::get('welcome', function () {return view('welcome');});
Route::get('booknow', function () {return view('booknow');});
Route::get('contact', function () {return view('contact');});
//Route::get('rooms', function () {return view('rooms');});
Route::get('rooms', [App\Http\Controllers\RoomController::class, 'allroomsview'])->name('rooms');


Auth::routes();

/*sign up */
//Route::post('/create','App\Http\Controllers\RegisterController@create');
Route::post('create', [App\Http\Controllers\Auth\RegisterController::class, 'create']);


Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:' . UserType::CLIENT])->group(function () {

    Route::get('welcome', function () {return view('welcome');});
    Route::get('home', function () {return view('welcome');});
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:' . UserType::ADMIN])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('/admin/home');

    /*-----rooms----- */
    Route::get('/admin/Room/allroom', [App\Http\Controllers\RoomController::class, 'allroom'])->name('/admin/Room/allroom');
    Route::get('/admin/Room/addroom', [App\Http\Controllers\RoomController::class, 'addroom'])->name('/admin/Room/addroom');
    Route::get('/admin/Room/editroom/{id}', [App\Http\Controllers\RoomController::class, 'editroom'])->name('/admin/Room/editroom');
    Route::get('/admin/Room/deleteroom', [App\Http\Controllers\RoomController::class, 'deleteroom'])->name('/admin/Room/deleteroom');
    //Route::resource('/admin/Room/allroom', RoomController::class);
    Route::post('/storeroom', [RoomController::class, 'storeroom']);
    Route::PATCH('/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::post('/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::get('/{id}/destroy',[RoomController::class, 'destroy'])->name('room.destroy');


    
    /*-------Employees-------- */
    Route::get('/admin/employee/allemployee', [App\Http\Controllers\EmpController::class, 'allemployee'])->name('/admin/employee/allemployee');
    Route::get('/admin/employee/addemployee', [App\Http\Controllers\EmpController::class, 'addemployee'])->name('/admin/employee/addemployee');
    Route::get('/admin/employee/updateemp/{id}', [App\Http\Controllers\EmpController::class, 'editemployee'])->name('/admin/employee/editemployee');
    Route::get('/admin/employee/deleteemployee', [App\Http\Controllers\EmpController::class, 'deleteemployee'])->name('/admin/employee/deleteemployee');
    Route::get('/admin/employee/showemployee/{id}',[App\Http\Controllers\EmpController::class, 'showemployee'])->name('/admin/employee/showemployee');
    //Route::resource('/admin/employee/allemployee', EmpController::class);
    Route::post('/storeemp', [EmpController::class, 'storeemp']);
    Route::PATCH('/updateemp/{id}', [EmpController::class, 'updateemp'])->name('updateemp');
    Route::post('/updateemp/{id}', [EmpController::class, 'updateemp'])->name('updateemp');
    Route::get('/{id}/destroyemp',[EmpController::class, 'destroyemp'])->name('destroyemp');

    /*-------client-------- */
    Route::get('/admin/client/allclient', [App\Http\Controllers\EmpController::class, 'allclient'])->name('/admin/client/allclient');
    Route::get('/admin/client/showclient/{id}',[App\Http\Controllers\EmpController::class, 'showclient'])->name('/admin/client/showclient');


});

/*------------------------------------------
--------------------------------------------
All reservation_emp Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:' . UserType::RESERVATION_EMP])->group(function () {

    Route::get('/reservation_emp/home', [HomeController::class, 'reservation_empHome'])->name('/reservation_emp/home');

    /*-----reservation----- */
    Route::get('/reservation_emp/reservation/all', [App\Http\Controllers\ResController::class, 'all'])->name('/reservation_emp/reservation/all');
    Route::get('/reservation_emp/reservation/add', [App\Http\Controllers\ResController::class, 'add'])->name('/reservation_emp/reservation/add');
    Route::post('/reservation_emp/reservation/addRR', [App\Http\Controllers\ResController::class, 'addRR'])->name('/reservation_emp/reservation/addRR');
    Route::get('/reservation_emp/reservation/edit/{res_id}', [App\Http\Controllers\ResController::class, 'edit'])->name('/reservation_emp/reservation/edit');
    Route::post('/storeres', [ResController::class, 'storeres']);
    Route::patch('/updateres/{res_id}', [ResController::class, 'updateres'])->name('updateres');
    Route::POST('/updateres/{res_id}', [ResController::class, 'updateres'])->name('updateres');
    Route::post('/delete/{res_id}', [ResController::class, 'delete'])->name('res.delete');
    Route::get('/reservation_emp/reservation/delete/{res_id}', [App\Http\Controllers\ResController::class, 'delete'])->name('/reservation_emp/reservation/delete');
    Route::get('/reservation_emp/reservation/showres/{res_id}',[App\Http\Controllers\ResController::class, 'showres'])->name('/reservation_emp/reservation/showres');
    Route::get('/reservation_emp/reservation/showres/{res_id}',[App\Http\Controllers\ResController::class, 'showres'])->name('/reservation_emp/reservation/showres');



/*-----bills----- */
Route::get('/reservation_emp/bills/allbill', [App\Http\Controllers\BillController::class, 'allbill'])->name('/reservation_emp/bills/allbill');
Route::get('/reservation_emp/bills/addbill/{id}', [App\Http\Controllers\BillController::class, 'addBill'])->name('/reservation_emp/bills/addbill');
Route::get('/reservation_emp/bills/editbill/{id}', [App\Http\Controllers\BillController::class, 'editbill'])->name('/reservation_emp/bills/editbill');
//Route::resource('/reservation_emp/bills/allroom', BillController::class);
Route::post('/storebill', [BillController::class, 'storebill']);
Route::patch('/updatebill/{id}', [BillController::class, 'updatebill'])->name('updatebill');
Route::POST('/updatebill/{id}', [BillController::class, 'updatebill'])->name('updatebill');
Route::get('/reservation_emp/bills/bill/{id}',[App\Http\Controllers\BillController::class, 'showbill'])->name('/reservation_emp/bills/bill');

});

/*------------------------------------------
--------------------------------------------
All kitchen_emp Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:' . UserType::KITCHEN_EMP])->group(function () {

    Route::get('/kitchen_emp/home', [HomeController::class, 'kitchen_empHome'])->name('/kitchen_emp/home');
});