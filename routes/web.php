<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;




Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/thankyou','App\Http\Controllers\HomeController@thankYou')->name('thankyou');

Route::get('/','App\Http\Controllers\HomeController@home')->name('home');
Route::post('after_assessment_store','App\Http\Controllers\AssessmentController@create')->name('after_assessment_store');
Route::get('/arrival','App\Http\Controllers\HomeController@arrival')->name('arrival');
Route::post('arrival_data','App\Http\Controllers\AssessmentController@arrival_data')->name('arrival_data');
Route::get('admit-entry/{id}','App\Http\Controllers\AssessmentController@admit_entry')->name('admit_entry');
Route::post('save_admin_entry/{id}','App\Http\Controllers\AssessmentController@save_admin_entry')->name('save_admin_entry');
Route::get('get_visitor_detail/{visitor?}','App\Http\Controllers\AssessmentController@get_visitor_detail')->name('get_visitor_detail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
	Route::get('visitor_form_link','App\Http\Controllers\AssessmentController@visitor_form_link')->name('visitor_form_link');
	Route::get('visitor_list','App\Http\Controllers\AssessmentController@visitor_list')->name('visitor_list');
	Route::get('success_assessment','App\Http\Controllers\AssessmentController@success_assessment')->name('success_assessment');
	Route::get('arrival_list','App\Http\Controllers\AssessmentController@arrival_list')->name('arrival_list');
	Route::get('fail_arrival','App\Http\Controllers\AssessmentController@fail_arrival')->name('fail_arrival');
	Route::get('exception_arrival','App\Http\Controllers\AssessmentController@exception_arrival')->name('exception_arrival');
	Route::get('fail_visitor','App\Http\Controllers\AssessmentController@fail_visitor')->name('fail_visitor');
	Route::get('success_arrival','App\Http\Controllers\AssessmentController@success_arrival')->name('success_arrival');
	Route::get('reset_assessment','App\Http\Controllers\AdminController@reset')->name('reset_assessment');
	Route::get('export_arrival','App\Http\Controllers\AssessmentController@exportaArrival')->name('export_arrival');
	
	//Setting
	Route::get('setting','App\Http\Controllers\SettingController@create')->name('setting');
	Route::post('Save_Setting','App\Http\Controllers\SettingController@Save_Setting')->name('Save_Setting');
    Route::get('admin.dashboard','App\Http\Controllers\AdminController@index')->name('admin.dashboard');
	
	//Personnel
	Route::get('personnel-list','App\Http\Controllers\AdminController@list')->name('personnel.list');
	Route::get('personnel-create','App\Http\Controllers\AdminController@create')->name('personnel.create');
	Route::post('personnel-store','App\Http\Controllers\AdminController@store')->name('personnel.store');
	Route::get('personnel-edit/{id}','App\Http\Controllers\AdminController@edit')->name('personnel.edit');
	Route::post('personnel.update/{id}','App\Http\Controllers\AdminController@update')->name('personnel.update');
	Route::get('personnel.delete/{id}','App\Http\Controllers\AdminController@delete')->name('personnel.delete');

	///Zone
	Route::get('zone-list','App\Http\Controllers\ZoneController@index')->name('zone.index');
	Route::get('zone-create','App\Http\Controllers\ZoneController@create')->name('zone.create');
	Route::post('zone-store','App\Http\Controllers\ZoneController@store')->name('zone.store');
	Route::get('zone-edit/{id}','App\Http\Controllers\ZoneController@edit')->name('zone.edit');
	Route::post('zone-update/{id}','App\Http\Controllers\ZoneController@update')->name('zone.update');
	Route::get('zone-delete/{id}','App\Http\Controllers\ZoneController@delete')->name('zone.delete');

	//Department
	Route::get('department.index','App\Http\Controllers\DepartmentController@index')->name('department.index');
	Route::get('department.create','App\Http\Controllers\DepartmentController@create')->name('department.create');
	Route::post('department.store','App\Http\Controllers\DepartmentController@store')->name('department.store');
	Route::get('department.delete/{id}','App\Http\Controllers\DepartmentController@delete')->name('department.delete');
	Route::get('department.edit/{id}','App\Http\Controllers\DepartmentController@edit')->name('department.edit');
	Route::post('department.update/{id}','App\Http\Controllers\DepartmentController@update')->name('department.update');

	Route::resource('/language', 'App\Http\Controllers\LanguageController');
	
	Route::get('language.add.translation/{id}','App\Http\Controllers\LanguageController@add_language_translation')->name('language.add.translation');

	Route::post('language.store.translation/{id}','App\Http\Controllers\LanguageController@store_language_translation')->name('language.store.translation');
});