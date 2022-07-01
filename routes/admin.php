<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\Admin\PermissionController;

//Admin routes
Route::middleware(['auth', 'role:Super Admin'])->name('admin.')->prefix('admin')
    ->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('admindashboard');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/users', UserController::class);
    Route::get('/status', [HomeController::class, 'status'])->name('status');

    //GetData
    Route::GET('/getDatas', [HomeController::class, 'getData'])->name('getData');
    Route::GET('/getRecords', [HomeController::class, 'getRecord'])->name('getRecord');
    Route::GET('/searchs', [UserController::class, 'search'])->name('users.search');
    Route::GET('/loanApplicatons/{loanApplication}/loanDetails', [HomeController::class, 'loanDetail'])
    ->name('loanDetails');

    //Update Payment
    Route::get('/updatePayment', [HomeController::class, 'updatePayment'])->name('updatePayment');

    //Loan Edit
    Route::GET('/loanApplicatons/{loanApplication}/editLoans', [LoanApplicationController::class, 'edit'])
    ->name('editLoan');

    //Update Payment Status
    Route::PUT('/loanApplicatons/{loanApplication}/updatePayment', [LoanApplicationController::class, 'update'])
    ->name('updatePaymentStatus');

    //Expense
    Route::GET('/expenses', [ExpenseController::class, 'create'])->name('expenses.create');
    Route::POST('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');

    //AssignRole To User
    Route::POST('/users{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::DELETE('/users{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');

    //GivePermission To User
    Route::POST('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::DELETE('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    //Roles has Permission
    Route::POST('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::DELETE('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    //Permissions has Role
    Route::POST('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::DELETE('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

});
