<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AuthController;

Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware(['apiJwt'])->group(function () {
    Route::get('/companies/{companyId}/employees', [EmployeeController::class, 'employeesByCompany']);
    Route::get('/companies', [CompanyController::class, 'index']);
    Route::post('/companies/create', [CompanyController::class, 'store']);

    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::post('auth/logout', [AuthController::class, 'logout']);
    
    Route::post('/employees/create', [EmployeeController::class, 'store']);
});