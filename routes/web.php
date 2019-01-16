<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('about-us', 'HomeController@about')->name('about');
Route::get('contact-us', 'HomeController@contact')->name('contact');
Route::get('doctors', 'HomeController@doctors')->name('doctors');
Route::get('services', 'HomeController@services')->name('services');
Route::get('terms', 'HomeController@terms')->name('terms');
Route::get('blog', 'HomeController@blog')->name('blog');
Route::get('components', 'HomeController@components')->name('components');


Route::group([
    'namespace' => 'dashboard',
    'middleware' => 'auth',
], function(){

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('dashboard/general-settings', 'SystemController@index')->name('general.settings');
        Route::get('dashboard/social-integration', 'SystemController@social_integration')->name('social.integration');
        Route::get('dashboard/meta-script', 'SystemController@meta_script')->name('meta.script');

        Route::get('dashboard/user-profile', 'ProfileController@index')->name('user-profile');

        Route::put('dashboard/save_generel', 'SystemController@save_genral_options')->name('save_generel');
        Route::put('dashboard/save_social', 'SystemController@save_social_integration')->name('save_social');
        Route::put('dashboard/save_scripts', 'SystemController@save_meta_scripts')->name('save_scripts');
  
    //Doctor Routes 
        Route::put('save-profile', 'ProfileController@save_profile')->name('save_profile');
        Route::put('change-pass', 'ProfileController@change_password')->name('change_pass');

        Route::get('dashboard/add-doctor', 'DoctorController@create')->name('add_doctor');
        Route::get('dashboard/all-doctors', 'DoctorController@index')->name('all_doctor');
        Route::get('dashboard/edit-doctor/{id}', 'DoctorController@edit')->name('edit_doctor');

        Route::post('dashboard/store-doctor', 'DoctorController@store')->name('store.doctor');
        Route::put('dashboard/update-doctor/{id}', 'DoctorController@update')->name('update.doctor');

    //Department Routes
        Route::get('dashboard/add-department', 'DepartmentController@create')->name('add_department');
        Route::get('dashboard/all-departments', 'DepartmentController@index')->name('all_department');
        Route::get('dashboard/edit-department/{id}', 'DepartmentController@edit')->name('edit_department');

        Route::post('dashboard/store-department', 'DepartmentController@store')->name('store.department');
        Route::put('dashboard/update-department/{id}', 'DepartmentController@update')->name('update.department');
  
    //Reports Routes
        Route::get('dashboard/add-report', 'ReportController@create')->name('add_report');
        Route::get('dashboard/all-reports', 'ReportController@index')->name('all_report');
        Route::get('dashboard/edit-report/{id}', 'ReportController@edit')->name('edit_report');

        Route::post('dashboard/store-report', 'ReportController@store')->name('store.report');
        Route::put('dashboard/update-report/{id}', 'ReportController@update')->name('update.report');        


    //Stuff's Routes
        Route::get('dashboard/add-stuff', 'StuffController@create')->name('add_stuff');
        Route::get('dashboard/all-stuffs', 'StuffController@index')->name('all_stuff');
        Route::get('dashboard/edit-stuff/{id}', 'StuffController@edit')->name('edit_stuff');

        Route::post('dashboard/store-stuff', 'StuffController@store')->name('store.stuff');
        Route::put('dashboard/update-stuff/{id}', 'StuffController@update')->name('update.stuff');
        
        
    //Accounts's Routes
        Route::get('dashboard/add-account', 'AccountController@create')->name('add.account');
        Route::get('dashboard/all-accounts', 'AccountController@index')->name('all.account');
        Route::get('dashboard/edit-account/{id}', 'AccountController@edit')->name('edit.account');

        Route::post('dashboard/store-account', 'AccountController@store')->name('store.account');
        Route::put('dashboard/update-account/{id}', 'AccountController@update')->name('update.account');
            
    //Accounts's Routes
        Route::get('dashboard/add-page', 'PageController@create')->name('add.page');
        Route::get('dashboard/all-pages', 'PageController@index')->name('all.page');
        Route::get('dashboard/edit-page/{id}', 'PageController@edit')->name('edit.page');

        Route::post('dashboard/store-page', 'PageController@store')->name('store.page');
        Route::put('dashboard/update-page/{id}', 'PageController@update')->name('update.page');
                

    //Appoinments Route
        Route::get('dashboard/all-appoinments', 'AppoinmentController@index')->name('all.appoiments');
        Route::put('dashboard/update-appoinment/{id}', 'AppoinmentController@update');

    //Logout Routes
        Route::get('logout', 'DashboardController@logout')->name('logout');
    });


Auth::routes();

Route::post('make-appoinment', 'dashboard/AppoinmentController@store')->name('make.appoinment');
