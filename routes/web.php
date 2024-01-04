<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminAssignmentController;
use App\Http\Controllers\AdminInformationController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminTaskController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

function set_active($route) {
    if(is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active': '';
}

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
    // Route::patch('/admin/profile/{id}', [AdminProfileController::class, 'update']);
    Route::post('/profile/{user}',[ProfileController::class,'update'])->name('profile.update');

    Route::get('/assignment', [AssignmentController::class, 'index'])->middleware('auth')->name('assignment');
    Route::get('/assignment/index', [AssignmentController::class, 'index'])->middleware('auth')->name('assignment/index');
    Route::get('/assignment/create', [AssignmentController::class, 'create'])->name('assignment/create');
    Route::post('/assignment/store', [AssignmentController::class, 'store'])->name('assignment/store');
    Route::post('/assignment/taskStore', [AssignmentController::class, 'taskStore'])->name('assignment/taskStore');
    Route::put('/assignment/update', [AssignmentController::class, 'update'])->name('assignment/update');
    Route::delete('/assignment/{id}', [AssignmentController::class, 'destroy'])->name('assignment/destroy');
    Route::get('/assignment/edit/{id}', [AssignmentController::class, 'edit'])->name('assignment/edit');
    Route::get('/assignment/edit/{id}', [AssignmentController::class, 'taskIndex'])->name('assignment/edit');
    Route::delete('/assignment/edit/{id}', [AssignmentController::class, 'destroyer'])->name('assignment/destroyer');

    Route::get('/information', [InformationController::class, 'index'])->middleware('auth')->name('information');
    Route::get('/information/index', [InformationController::class, 'index'])->middleware('auth')->name('information/index');
    Route::get('/information/create', [InformationController::class, 'create'])->name('information/create');
    Route::post('/information/store', [InformationController::class, 'store'])->name('information/store');
    Route::put('/information/update', [InformationController::class, 'update'])->name('information/update');
    Route::delete('/information/{id}', [InformationController::class, 'destroy'])->name('information/destroy');
    Route::get('/information/edit/{id}', [InformationController::class, 'edit'])->name('information/edit');

    Route::get('/team', [TeamController::class, 'index'])->middleware('auth')->name('team');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth')->name('admin/dashboard');
    Route::post('/admin/dashboard/store', [AdminDashboardController::class, 'store'])->name('admin/dashboard/store');
    Route::post('/admin/dashboard/store', [AdminDashboardController::class, 'storeInfo'])->name('admin/dashboard/store');

    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->middleware('auth')->name('admin/profile');
    // Route::patch('/admin/profile/{id}', [AdminProfileController::class, 'update']);
    Route::post('/admin/profile/{user}',[AdminProfileController::class,'update'])->name('admin.profile.update');

    Route::get('/admin/assignment', [AdminAssignmentController::class, 'index'])->middleware('auth')->name('admin/assignment');
    Route::get('/admin/assignment/index', [AdminAssignmentController::class, 'index'])->middleware('auth')->name('admin/assignment/index');
    Route::get('/admin/assignment/create', [AdminAssignmentController::class, 'create'])->name('admin/assignment/create');
    Route::post('/admin/assignment/store', [AdminAssignmentController::class, 'store'])->name('admin/assignment/store');
    Route::put('/admin/assignment/update', [AdminAssignmentController::class, 'update'])->name('admin/assignment/update');
    Route::delete('/admin/assignment/{id}', [AdminAssignmentController::class, 'destroy'])->name('admin/assignment/destroy');
    Route::get('/admin/assignment/edit/{id}', [AdminAssignmentController::class, 'edit'])->name('admin/assignment/edit');

    Route::get('/admin/information', [AdminInformationController::class, 'index'])->middleware('auth')->name('admin/information');
    Route::get('/admin/information/index', [AdminInformationController::class, 'index'])->middleware('auth')->name('admin/information/index');
    Route::get('/admin/information/create', [AdminInformationController::class, 'create'])->name('admin/information/create');
    Route::post('/admin/information/store', [AdminInformationController::class, 'store'])->name('admin/information/store');
    Route::put('/admin/information/update', [AdminInformationController::class, 'update'])->name('admin/information/update');
    Route::delete('/admin/information/{id}', [AdminInformationController::class, 'destroy'])->name('admin/information/destroy');
    Route::get('/admin/information/edit/{id}', [AdminInformationController::class, 'edit'])->name('admin/information/edit');

    Route::get('/admin/task', [AdminTaskController::class, 'index'])->middleware('auth')->name('admin/task');
    Route::get('/admin/task/index', [AdminTaskController::class, 'index'])->middleware('auth')->name('admin/task/index');
    Route::post('/admin/task/store', [AdminTaskController::class, 'store'])->name('admin/task/store');

    Route::get('/admin/register', [AdminRegisterController::class, 'index'])->middleware('auth')->name('admin/register');
    Route::get('/admin/register/index', [AdminRegisterController::class, 'index'])->middleware('auth')->name('admin/register/index');
    Route::delete('/admin/register/{id}', [AdminInformationController::class, 'destroy'])->name('admin/register/destroy');

    Route::get('/admin/team', [AdminTeamController::class, 'index'])->middleware('auth')->name('admin/team');
});


