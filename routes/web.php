<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;    
use Illuminate\Support\Facades\Auth;   
use Illuminate\Support\Facades\View;     
use App\Models\User;
            
use App\Http\Controllers\profile\profileController;
use App\Http\Controllers\tables\tablesController;
use App\Http\Controllers\billing\billingController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\management\managementController;
use App\Http\Controllers\profileStatic\profileStaticController;
use App\Http\Controllers\FondosCustodiaController;
use App\Http\Controllers\DevolucionController;

// Rutas públicas
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
// Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
// Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');

// Deshabilitar rutas de autenticación generadas por Auth::routes()
Auth::routes([
    'login' => false,
    'register' => false,
    'reset-password' => false,
    
]);

// Grupo de rutas protegidas por autenticación
Route::group(['middleware' => 'auth'], function () {
    // Composer de vistas para pasar datos a todas las vistas
    View::composer('*', function ($view) {
        $user = auth()->user();
        if ($user) {
            $persona = User::join('personas', 'users.persona_id', '=', 'personas.id')
                ->where('users.id', $user->id)
                ->select('users.persona_id', 'personas.*')
                ->first();
            $view->with('persona', $persona);
        }
    });

    // Rutas del panel de control
    Route::get('/', function () {
        return redirect('/dashboard');
    });

    Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
    Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
    Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // Otras rutas protegidas
    // Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    // Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
    
    // Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    // Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::resource('/profile', UserProfileController::class);
    // Route::post('/profile/{id}', [UserProfileController::class, 'update'])->name('profile.update');
    

    // Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');


    Route::resource('/user-profile', profileController::class);
    Route::resource('/tables', tablesController::class);
    Route::resource('/fondos-custodia', FondosCustodiaController::class);
    Route::resource('/devolucion', DevolucionController::class);
    Route::resource('/billing', billingController::class);
    Route::resource('/dashboard', dashboardController::class);
    Route::resource('/management', managementController::class);
    Route::resource('/profile-static', profileStaticController::class);
    
    // Route::get('/{page}', [PageController::class, 'index'])->name('page');
    
    
    
    
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
