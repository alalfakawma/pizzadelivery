<?php

Auth::routes();

// Home
Route::get('/', 'HomeController@index')->name('home');

// Admin dashboard
Route::prefix('/dashboard')->middleware('role:superadmin|admin|employee')->group(function() {
	Route::middleware('role:superadmin|admin')->group(function() {
		Route::get('/', 'DashboardController@overview')->name('dashboard.overview');
		Route::prefix('/add')->group(function() {
			Route::get('/pizzas', 'DashboardController@pizzas')->name('dashboard.add.pizzas');
			Route::get('/sizes', 'DashboardController@sizes')->name('dashboard.add.sizes');
			Route::get('/toppings', 'DashboardController@toppings')->name('dashboard.add.toppings');
			Route::get('/discount-codes', 'DashboardController@discountCodes')->name('dashboard.add.discountCodes');
		});
		Route::prefix('/visuals')->group(function() {
			Route::get('/carousel', 'DashboardController@carousel')->name('dashboard.visuals.carousel');
		});
		Route::prefix('/user-control-area')->group(function() {
			Route::get('/users', 'DashboardController@users')->name('dashboard.uca.users');
			Route::prefix('/access-controls')->group(function() {
				Route::get('/roles', 'DashboardController@roles')->name('dashboard.uca.ac.roles');
				Route::get('/permissions', 'DashboardController@permissions')->name('dashboard.uca.ac.permissions');
			});
		});
	});
	Route::get('/orders', 'DashboardController@orders')->name('dashboard.orders');
});