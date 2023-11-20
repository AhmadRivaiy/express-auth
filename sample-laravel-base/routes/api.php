<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->group(function () {

    // INTEGRATION
    Route::namespace('Integration')->prefix('/integration')->group(function () {

        // SIGESIT JUARA
        Route::prefix('/sigesit-juara')->group(function () {
            Route::get('check_access', 'SigesitJuaraController@checkAccess');
            Route::get('autologin', 'SigesitJuaraController@autologin');
        });

        // JFLS
        // Route::prefix('/jfls')->group(function () {
        //     Route::get('check_access', 'JflsController@checkAccess');
        //     Route::get('autologin', 'JflsController@autologin');
        // });

        // SIMANTAN
        Route::prefix('/simantan')->group(function () {
            Route::get('check_access', 'SimantanController@checkAccess');
            Route::get('autologin', 'SimantanController@autologin');
        });

        // PUSAKA
        Route::prefix('/pusaka')->group(function () {
            Route::get('check_access', 'PusakaController@checkAccess');
            Route::get('autologin', 'PusakaController@autologin');
        });

        // DASHBOARD PENDIDIKAN
        Route::prefix('/dashboard-pendidikan')->group(function () {
            Route::get('check_access', 'DashboardPendidikanController@checkAccess');
            Route::get('autologin', 'DashboardPendidikanController@autologin');
        });

        // AGENDA PIMPINAN
        Route::prefix('/agenda-pimpinan')->group(function () {
            Route::get('check_access', 'AgendaPimpinanController@checkAccess');
            Route::get('autologin', 'AgendaPimpinanController@autologin');
        });

        // AGENDA PIMPINAN
        Route::prefix('/simantap')->group(function () {
            Route::get('check_access', 'SiMantapController@checkAccess');
            Route::get('autologin', 'SiMantapController@autologin');
        });
    });
});
