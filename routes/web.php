<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {

    Route::get('/', 'DashBoardController@index');

    Route::get('/dashboard', 'DashBoardController@index');

    Route::resource('employers', 'EmployersController');
    Route::get('/employers/{employer}/positions', 'EmployersController@createPosition')->name('employer.position.create');
    Route::post('/employers/{employer}/positions', 'EmployersController@storePosition')->name('employer.position.store');
    Route::get('/employers/{employer}/positions/{position}', 'EmployersController@detachPosition')->name('employer.position.detach');

    Route::post('employers/{employer}/image', 'EmployerAvatarController@store')->name('employer.image.store');
    Route::resource('employers/{employer}/experiences', 'EmployerExperienceController', ['as' => 'employer']);
    Route::resource('employers/{employer}/positions', 'EmployerPositionController', ['as' => 'employer']);

    Route::get('/employers/{employer}/experiences', 'EmployersController@createExperience')->name('employer.experience.create');
    Route::post('/employers/{employer}/experiences', 'EmployersController@storeExperience')->name('employer.experience.store');
    Route::get('/employers/{employer}/experiences/{experience}', 'EmployersController@detachExperience')->name('employer.experience.detach');

    Route::resource('positions', 'PositionController');
    Route::get('/positions/{position}/restore', 'PositionController@restore')->name('positions.restore');

    Route::resource('/experiences', 'ExperienceController');
    Route::get('/experiences/{experience}/restore', 'ExperienceController@restore')->name('experiences.restore');
    
    Route::resource('expenses', 'ExpenseController');
    
    Route::resource('invoices', 'InvoiceController');
    
    Route::resource('expense-categories', 'ExpenseCategoryController');

    Route::resource('stock-categories', 'StockCategoryController');

    Route::resource('stocks', 'StockController');

    Route::resource('sales', 'SaleController');
});
