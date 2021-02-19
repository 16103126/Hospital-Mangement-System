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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/unitedhospital','frontend.home')->name('unitedhospital');
Route::view('/dashboard','backend.partials.dashboard')->name('dashboard');
//Route::view('/admindashboard','backend.partials.admindashboard')->name('admindashboard');
//Route::view('/receptiondashboard','backend.partials.receptiondashboard')->name('receptiondashboard');
//Route::view('/doctordashboard','backend.partials.doctordashboard')->name('doctordashboard');



Route::resource('appointment', 'AppointmentController');
Route::get('/appointment','AppointmentController@make')->name('appointment');
Route::post('/appointment','AppointmentController@store')->name('appointment');
Route::get('/patientInformation','AppointmentController@request')->name('patientInformation');
Route::get('/appointmentList','AppointmentController@List')->name('appointmentList');
Route::get('/appointmentshow','AppointmentController@show')->name('appointmentshow');
Route::view('/appointmentbyreception','backend.appointment.appointmentbyreception')->name('appointmentbyreception');


Route::resource('doctors', 'DoctorController');
Route::get('/doctorinformation','DoctorController@index')->name('doctorinformation');
Route::get('/doctorinformation/view','DoctorController@view')->name('doctorinformation.view');
Route::get('/doctorinformationlist','DoctorController@doctorlist')->name('doctorinformationlist');

Route::get('/presception','PresceptionController@index')->name('presception.index');
Route::get('/presception/create','PresceptionController@create')->name('presception.create');
Route::post('/presception/store','PresceptionController@store')->name('presception.store');
Route::get('/presception/{id}/show','PresceptionController@show')->name('presception.show');
Route::get('/presception/{id}/edit','PresceptionController@edit')->name('presception.edit');
Route::post('/presception/{id}/update','PresceptionController@update')->name('presception.update');
Route::get('/presception/{id}/delete','PresceptionController@destroy')->name('presception.destroy');
Route::get('/presception/{id}/print-pdf','PresceptionController@printPDF')->name('presception.pdf');



Route::get('/room','RoomController@index')->name('room.index')->middleware('auth');
Route::get('/room/create','RoomController@create')->name('room.create');
Route::post('/room/create','RoomController@store')->name('room.store');
Route::get('/room/{id}/edit','RoomController@edit')->name('room.edit');
Route::get('/room/{id}/delete','RoomController@destroy')->name('room.destroy');
Route::post('/room/{id}/update','RoomController@update')->name('room.update');


Route::get('/print-pdf', [ 'as' => 'customer.printpdf', 'uses' => 'CustomerController@printPDF']);
Route::get('/payment/{id}/print-pdf','PaymentController@printPDF')->name('payment.pdf');


Route::get('/payment','PaymentController@index')->name('payment.index');
Route::get('/payment/create','PaymentController@create')->name('payment.create');
Route::post('/payment/create','PaymentController@store')->name('payment.store');
Route::get('/payment/{id}/edit','PaymentController@edit')->name('payment.edit');
Route::get('/payment/{id}/delete','PaymentController@destroy')->name('payment.destroy');
Route::post('/payment/{id}/update','PaymentController@update')->name('payment.update');
Route::get('/payment/{id}/show','PaymentController@show')->name('payment.show');
Route::get('/payment/print','PaymentController@print')->name('print.show');




Route::get('/schedule','ScheduleController@index')->name('schedule.index');
Route::get('/schedule/create','ScheduleController@create')->name('schedule.create');
Route::post('/schedule/create','ScheduleController@store')->name('schedule.store');
Route::get('/scheduleinformation','ScheduleController@show')->name('schedule.show');
Route::get('/schedule/{id}/edit','ScheduleController@edit')->name('schedule.edit');
Route::get('/schedule/{id}/delete','ScheduleController@destroy')->name('schedule.destroy');
Route::post('/schedule/{id}/update','ScheduleController@update')->name('schedule.update');



Route::get('/diagnostic','DiagnosticController@index')->name('diagnostic.index');
Route::get('/diagnostic/create','DiagnosticController@create')->name('diagnostic.create');
Route::post('/diagnostic/create','DiagnosticController@store')->name('diagnostic.store');
Route::get('/diagnostic/{id}/edit','DiagnosticController@edit')->name('diagnostic.edit');
Route::get('/diagnostic/{id}/delete','DiagnosticController@destroy')->name('diagnostic.destroy');
Route::post('/diagnostic/{id}/update','DiagnosticController@update')->name('diagnostic.update');



Route::get('/contact','ContactController@index')->name('contact.index');
Route::get('/create','ContactController@create')->name('contact.create');
Route::post('/create','ContactController@store')->name('contact.store');
Route::get('/contact/{id}/delete','ContactController@destroy')->name('contact.destroy');


Route::get('/payment','PaymentController@index')->name('payment.index');
Route::get('/payment/create','PaymentController@create')->name('payment.create');
Route::post('/payment/create','PaymentController@store')->name('payment.store');
Route::get('/payment/{id}/edit','PaymentController@edit')->name('payment.edit');
Route::get('/payment/{id}/delete','PaymentController@destroy')->name('payment.destroy');
Route::post('/payment/{id}/update','PaymentController@update')->name('payment.update');

Route::get('/user','RegistrationContrller@index')->name('user.index');
Route::get('/registration','RegistrationContrller@create')->name('registration.create');
Route::post('/registration','RegistrationContrller@store');
Route::get('/user/{id}/edit','RegistrationContrller@edit')->name('user.edit');
Route::post('/user/{id}/update','RegistrationContrller@update')->name('user.update');
Route::get('/user/{id}/delete','RegistrationContrller@destroy')->name('user.destroy');


Route::get('/login','SessionsController@create')->name('login.create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy')->name('logout');
Route::get('forgot_password','ForgotPasswordController@forgot');
Route::get('forgot_password','ForgotPasswordController@password');
Route::get('/reset_password/{email}/{code}','ForgotPasswordController@reset');
Route::post('/reset_password/{email}/{code}','ForgotPasswordController@resetPassword');

	
Route::group(['middleware' => 'checkRole:admin', 'namespace' => 'Admin'], function () {
Route::get('admin', 'AdminController@index')->name('admin');
});
Route::group(['middleware' => 'checkRole:reception', 'namespace' => 'Receptionist'], function () {
Route::get('reception', 'ReceptionistController@index')->name('reception');});
Route::group(['middleware' => 'checkRole:doctor', 'namespace' => 'Doctors'], function () {
Route::get('doctor', 'DoctorsController@index')->name('doctor');});



Route::get('/sendemail','SendEmailController@index')->name('sendemail.index');
Route::post('/sendemail/send','SendEmailController@send')->name('sendemail.send');



Route::get('stripe', 'StripePaymentController@stripe')->name('stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');


Route::get('/payment/tuy', 'PaymentoController@index');
Route::post('/charge', 'PaymentoController@charge');





