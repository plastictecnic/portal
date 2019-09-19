<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'TestController@index')->name('test');

// Open to all
Route::get('/staff/dir', 'Guest\StaffController@staffDir')->name('staff-dir');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function(){

    // defaul
    Route::get('/home', 'HomeController@index')->name('home');

    // Route for user management
    // Main view user page
    // Shows all users
    Route::get('/user-list', 'User\UserController@userList')->name('user-list');
    // Create new user
    Route::get('/user-create', 'User\UserController@createUser')->name('user.create');
    // Delete user
    Route::delete('user/{user}', 'User\UserController@destroy')->name('user.destroy');
    // Change user password
    Route::post('user/{user}/change-password', 'User\UserController@changePassword')->name('change.password');
    // Store user with profile
    Route::post('/user-store', 'User\UserController@storeUser')->name('user.store');
    // Department / Desgnation
    Route::get('/department', 'User\DepartmentController@createDepartment')->name('user.department');
    // Add department
    Route::post('/department-store', 'User\DepartmentController@store')->name('department.store');
    // Add designation
    Route::post('/designation-store', 'User\DesignationController@store')->name('designation.store');

    // CRUD user group / role
    Route::resource('role', 'User\RoleController')->middleware('role:Super Admin');
    Route::get('role/create', 'User\RoleController@index')->name('role.create')->middleware('role:Super Admin');
    // CRUD user permission
    Route::resource('permission', 'User\PermissionController')->middleware('role:Super Admin');
    Route::get('permission/create', 'User\PermissionController@index')->name('permission.create')->middleware('role:Super Admin');

    // Assign role and permission form
    Route::post('set/{user}/role/permission/form', 'User\UserController@setRolePermissionForm')->name('set-permission-form');
    Route::post('set/{user}/role/permission', 'User\UserController@setRolePermission')->name('set-permission');

    // Assign HOD
    Route::get('/set/hod', 'User\UserController@setHodForm')->name('hod');
    Route::post('/set/hod', 'User\UserController@setHod')->name('hod');

    // Assets
    Route::get('/assets-list', 'Asset\AssetController@index')->name('asset-list');
    Route::get('/assets/create', 'Asset\AssetController@create')->name('asset.create');
    Route::post('/assets/store', 'Asset\AssetController@store')->name('asset.store');
});
