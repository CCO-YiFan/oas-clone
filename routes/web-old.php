<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\RoleController;
use App\Http\Controllers\Superadmin\AdminAccountController;
use App\Http\Controllers\Superadmin\AccStatusController;
use App\Http\Controllers\Superadmin\IncomeController;
use App\Http\Controllers\Superadmin\GenderController;
use App\Http\Controllers\Superadmin\MaritalController;
use App\Http\Controllers\Superadmin\NationalityController;
use App\Http\Controllers\Superadmin\ReligionController;
use App\Http\Controllers\Superadmin\RaceController;
use App\Http\Controllers\Superadmin\GuardianRelationshipController;
use App\Http\Controllers\Superadmin\SchoolLevelController;
use App\Http\Controllers\Superadmin\SchoolController;
use App\Http\Controllers\Superadmin\DieseaseController;
use App\Http\Controllers\Superadmin\AddressTypeController;
use App\Http\Controllers\Superadmin\ApplicationStatusController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\UserProfile\PersonalParticularController;
use App\Http\Controllers\academicDetail\academicDetailController;
use App\Http\Controllers\StatusOfHealth\StatusOfHealthController;
use App\Http\Controllers\Payment\PaymentController;

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
    return view('oas.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// superadmin

Route::prefix('superadmin/')->middleware('auth')->group(function(){

    Route::controller(SuperadminController::class)->name('superadmin.')->group(function(){
        Route::get('/','index')->name('home');
    });

    Route::controller(DieseaseController::class)->prefix('disease/')->name('disease.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(SchoolLevelController::class)->prefix('school_level/')->name('school_level.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(RoleController::class)->prefix('role/')->name('role.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(AdminAccountController::class)->prefix('adminAccount/')->name('adminAccount.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(AccStatusController::class)->prefix('accStatus/')->name('accStatus.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(IncomeController::class)->prefix('income/')->name('income.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(GenderController::class)->prefix('gender/')->name('gender.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(MaritalController::class)->prefix('marital/')->name('marital.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(NationalityController::class)->prefix('nationality/')->name('nationality.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(ReligionController::class)->prefix('religion/')->name('religion.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(RaceController::class)->prefix('race/')->name('race.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });
    
    Route::controller(GuardianRelationshipController::class)->prefix('guardian-relationship/')->name('guardian_relationship.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(AddressTypeController::class)->prefix('addressType/')->name('addressType.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(ApplicationStatusController::class)->prefix('applicationStatus/')->name('applicationStatus.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

    Route::controller(SchoolController::class)->prefix('school/')->name('school.')->group(function(){
        Route::get('/','index')->name('home');
        Route::post('/create','create')->name('create');
        Route::post('/update','update')->name('update');
    });

});

Route::controller(PersonalParticularController::class)->prefix('user-profile/personal-particulars')->name('personalParticulars.')->group(function(){
    Route::get('/','index')->name('home');
    Route::post('/create','create')->name('create');
});

Route::controller(AcademicDetailController::class)->prefix('user/')->name('academicDetail.')->group(function(){
    Route::get('/academicDetail','index')->name('home');
    Route::post('/academicDetail/create','create')->name('create');
});

Route::controller(StatusOfHealthController::class)->prefix('user/')->name('statusOfHealth.')->group(function(){
    Route::get('/statusOfHealth','index')->name('home');
    Route::post('/statusOfHealth/create','create')->name('create');
});

Route::controller(PaymentController::class)->prefix('user')->name('payment.')->group(function(){
    Route::get('/payment','index')->name('index');
    Route::post('/payment/create','create')->name('create');
});




