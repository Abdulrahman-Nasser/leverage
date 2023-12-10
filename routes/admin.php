<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\adminPagesController;
use App\Http\Controllers\Codes\codesController;
use App\Http\Controllers\Department\departmentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// to get login page for admin
Route::middleware('guest:admin')->group(function () {
    Route::get('/getlogin', [adminController::class, 'getLogin'])->name('admin.login-page');
    Route::post('/login-admin', [adminController::class, 'login_admin'])->name('loginAdmin');
});

// //------------------------------ admin  ---------------------------- //
Route::middleware('auth:admin')->group(function () {
    // for get admin home page using index function
    Route::get('/', [adminController::class, 'index']);
    Route::get('/admin@adminleverage.com', [adminController::class, 'index'])->name('admin.index');
    Route::post('/logout', [adminController::class, 'logoutAdmin'])->name('admin.logout');


    //------------------------------- admin pages -----------------------------//
    // users adn settigns
    Route::get('/settigns', [adminPagesController::class, 'getSettigns'])->name('admin.settigns');
    Route::get('/allUsers', [adminPagesController::class, 'getAllUsers'])->name('admin.getAllUsers');
    Route::get('/getAddUser', [adminPagesController::class, 'getAddUser'])->name('admin.getAddUser');
    Route::get('getEditUser/{id}', [adminPagesController::class, 'getEditUser'])->name('admin.editUser');
    Route::post('/add-user', [adminPagesController::class, 'addUser'])->name('admin.add-user');
    Route::post('updateUser/{id}', [adminPagesController::class, 'editUser'])->name('admin.edit-user');
    Route::get('deleteUser/{id}',[adminPagesController::class , 'destroyUser'])->name('admin.destroyUser');

    // departments
    Route::get('/departments',[departmentController::class , 'index'])->name('admin.department');
    Route::get('/getAllDepartments' , [departmentController::class , 'getAllDepartments'])->name('admin.getAllDepartments');
    Route::get('/getEditDepartment/{id}' , [departmentController::class , 'getEditDepartment'])->name('admin.getEditDepartment');
    Route::get('/deleteDepartment/{id}' , [departmentController::class , 'destroyDepartment'])->name('admin.deleteDepartment');
    Route::post('/editDepartment/{id}' , [departmentController::class , 'editDepartment'])->name('admin.editDepartment');
    Route::post('/addDepartment', [departmentController::class , 'addDepartment'])->name('admin.addDepartment');

    // Codes
    Route::get('/addCodes' , [codesController::class , 'index'])->name('admin.addCode');
    Route::get('/allCodes' , [codesController::class , 'getAllCodes'])->name('admin.getAllCodes');
    Route::get('/editCodes/{id}' , [codesController::class , 'getEditCodes'])->name('admin.getEditCodes');
    Route::get('/deleteCodes{id}' , [codesController::class , 'destroy'])->name('admin.destroyCodes');
    Route::post('/editCodes/{id}' , [codesController::class , 'editCodes'])->name('admin.editCodes');
    Route::post('/addCodes' , [codesController::class , 'store'])->name('admin.addCode');
});



