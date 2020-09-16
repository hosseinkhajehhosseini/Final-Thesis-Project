<?php

use App\WorkoutProgram;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => false]);

Route::post('/login','Auth\LoginController@login')->name('login');

//panel routes
Route::group(['middleware' => ['auth'], 'prefix' => 'panel', 'as' => 'panel.'], function () {

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

    Route::get('/user/attachments/upload/{id}','UserController@userAttachments')->name('user.attachments');
//    Route::get('/user/attachments/upload','UserController@userAttachments')->name('user.attachments');
    Route::resource('users', 'UserController')->except([
        'create',
    ]);

    Route::get('order/result/{id}','UserRequestController@orderResult')->name('order.result');
    Route::resource('requests', 'UserRequestController');

    Route::post('order/add/{id}','UserRequestController@addOrder')->name('order.add');

    Route::get('workout-programs/export-pdf/{id}','WorkoutProgramController@exportPDF')->name('workout-programs.export-pdf');
    Route::get('workout-programs/show/{id}','WorkoutProgramController@show')->name('workout-programs.show');
    Route::get('nutrition-programs/export-pdf/{id}','NutritionProgramController@exportPDF')->name('nutrition-programs.export-pdf');
    Route::get('nutrition-programs/show/{id}','NutritionProgramController@show')->name('nutrition-programs.show');

    Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'as' => 'admin.'], function () {

        Route::get('transactions/all','ExpenseController@transactions')->name('transactions');

        Route::get('/logout', 'UserController@logout')->name('logout');

        Route::get('workouts/group/{id}','WorkoutController@group')->name('workouts.group');
        Route::resource('workouts', 'WorkoutController');

        Route::put('workout-programs/update/item/{id}', 'WorkoutProgramController@updateItem')->name('workout-programs.update.item');
        Route::delete('workout-programs/destroy/item/{id}', 'WorkoutProgramController@destroyItem')->name('workout-programs.destroy.item');
        Route::resource('workout-programs', 'WorkoutProgramController')->except(['show']);

        Route::resource('nutritions', 'NutritionController');

        Route::get('nutrition-programs/ratio', 'NutritionProgramController@getRatio')->name('nutrition-programs.ratio');
        Route::put('nutrition-programs/update/item/{id}', 'NutritionProgramController@updateItem')->name('nutrition-programs.update.item');
        Route::delete('nutrition-programs/destroy/item/{id}', 'NutritionProgramController@destroyItem')->name('nutrition-programs.destroy.item');
        Route::resource('nutrition-programs', 'NutritionProgramController')->except(['show']);
//        Route::resource('diet-programs', 'DietProgramController');

        Route::get('expenses/edit','ExpenseController@edit')->name('expenses.edit');
        Route::put('expenses/update','ExpenseController@update')->name('expenses.update');

    });
});

Route::prefix('attachment')->name("attachment.")->group(function () {
    Route::post('store', 'AttachmentController@store')->name('store');
    Route::delete('destroy/{id}', 'AttachmentController@destroy')->name('destroy');
    Route::put('update/{id}', 'AttachmentController@update')->name('update');

    Route::post('/user/store', 'AttachmentController@userStore')->name('user.store');
    Route::put('/user/update/{id}', 'AttachmentController@userUpdate')->name('user.update');
    Route::delete('/user/delete/{id}', 'AttachmentController@userDestroy')->name('user.destroy');

});

//website routes
Route::group(['as' => 'website.'], function () {

    Route::get('/', 'WebsiteController@index')->name('index');

    Route::get('/users/join','WebsiteController@register')->name('users.join');
    Route::post('/users/store','WebsiteController@store')->name('users.store');

    Route::get('/users/login','WebsiteController@login')->name('users.login');
    Route::post('/users/login','WebsiteController@check')->name('users.check');

    Route::get('/users/logout','WebsiteController@logout')->name('users.logout');
});