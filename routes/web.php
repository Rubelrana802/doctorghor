<?php

/*Start Frontend*/
Route::get('/','frontController@index');
Route::get('/doctor/view/{id}', 'frontController@doctors');
Route::post('/doctor/view', 'frontController@doctors')->name('doctorview');
Route::get('/doctor/single/{id}', 'frontController@doctorsingle');
Route::post('/doctor/single', 'frontController@doctorsingle');
Route::post('/confirm/appointment', 'frontController@appointment')->name('confirm');
Route::get('/confirm/appointment', 'frontController@appointmentconfirm');
Route::get('/thank/you', 'frontController@thankyou');
Route::get('/patient/view','doctorViewController@manage');

Route::post('/autocomplete/fetch', 'frontController@fetch')->name('autocomplete.fetch');

//Select route for division to department..
Route::get('/json-districts','frontController@districts');
Route::post('/json-districts','frontController@districts');
Route::get('/json-thanas', 'frontController@thanas');
Route::post('/json-thanas', 'frontController@thanas');
Route::get('/json-hospitals', 'frontController@hospitals');
Route::post('/json-hospitals', 'frontController@hospitals');
Route::get('/json-departments', 'frontController@departments');
Route::post('/json-departments', 'frontController@departments');
/*End frontend*/

/*Doctor View*/
Route::get('/docotorm/manage', 'doctorViewController@index');
Route::get('/docotorm/', 'doctorViewController@action')->name('live_search.action');
/*Doctor View*/

/*User Auth route start*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('doc/register', 'doctorController@add')->name('docregister');
Route::post('doc/register/save', 'doctorController@save')->name('docregister.save');
/*User Auth route end*/

/*Super Admin start*/
Route::prefix('superadmin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
// Password reset route...
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

  Route::get('/register','AdminRegisterController@AdminRegistration')->name('admin.register');
  Route::post('/register','AdminRegisterController@Aregister')->name('admin.register.submit');
});

Route::get('/reg/doctor','AdmindoctorController@regdoctor')->name('regdoctor');
/*Super Admin end*/

/* company start*/
Route::prefix('company')->group(function() {
  Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
  Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
  Route::get('/', 'CompanyController@index')->name('company.dashboard');
  Route::get('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');
  Route::post('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');
  Route::get('/register','CompanyRegisterController@RegistrationForm')->name('company.register');
  Route::post('/register','CompanyRegisterController@cregister')->name('company.register.submit');
// Password reset route...
  Route::post('/password/email', 'Auth\CompanyForgotPasswordController@sendResetLinkEmail')->name('company.password.email');
  Route::get('/password/reset', 'Auth\CompanyForgotPasswordController@showLinkRequestForm')->name('company.password.request');
  Route::post('/password/reset', 'Auth\CompanyResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\CompanyResetPasswordController@showResetForm')->name('company.password.reset');
});
/* company end*/

/* Doctor start*/
Route::prefix('dctr')->group(function() {
  Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('Doctor.login');
  Route::post('/login', 'Auth\DoctorLoginController@login')->name('Doctor.login.submit');
  Route::get('/', 'doctorController@index')->name('Doctor.dashboard');
  Route::get('/logout', 'Auth\DoctorLoginController@logout')->name('Doctor.logout');
  Route::post('/logout', 'Auth\DoctorLoginController@logout')->name('Doctor.logout');
  Route::get('/register','DoctorRegisterController@RegistrationForm')->name('Doctor.register');
  Route::post('/register','DoctorRegisterController@cregister')->name('Doctor.register.submit');
// Password reset route...
  Route::post('/password/email', 'Auth\DoctorForgotPasswordController@sendResetLinkEmail')->name('Doctor.password.email');
  Route::get('/password/reset', 'Auth\DoctorForgotPasswordController@showLinkRequestForm')->name('Doctor.password.request');
  Route::post('/password/reset', 'Auth\DoctorResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\DoctorResetPasswordController@showResetForm')->name('Doctor.password.reset');
});
/* Doctor end*/

/* Patient start*/
Route::prefix('patient')->group(function() {
  Route::get('/login', 'Auth\PatientLoginController@showLoginForm')->name('patient.login');
  Route::post('/login', 'Auth\PatientLoginController@login')->name('patient.login.submit');
  Route::get('/', 'PatientController@index')->name('patient.dashboard');
  Route::post('/', 'PatientController@index')->name('patient.dashboard');
  Route::get('/logout', 'Auth\PatientLoginController@logout')->name('patient.logout');
  Route::post('/logout', 'Auth\PatientLoginController@logout')->name('patient.logout');
  Route::get('/register','PatientRegisterController@RegistrationForm')->name('patient.register');
  Route::post('/register','PatientRegisterController@cregister')->name('patient.register.submit');
});
/* Patient end*/

/* Add Medicine */
Route::prefix('medicine')->group(function() {
Route::get('/add', 'medicineController@index');
Route::post('/save', 'medicineController@save');
Route::get('/manage', 'medicineController@manage');
Route::get('/edit/{id}', 'medicineController@edit');
Route::post('/edit', 'medicineController@update');
Route::get('/delete/{id}', 'medicineController@delete');
});
/* End Medicine */

/* hospital start*/
Route::prefix('hospital')->group(function() {
  Route::get('/login', 'Auth\HospitalLoginController@showLoginForm')->name('hospital.login');
  Route::post('/login', 'Auth\HospitalLoginController@login')->name('hospital.login.submit');
  Route::get('/', 'HospitalController@index')->name('hospital.dashboard');
  Route::get('/logout', 'Auth\HospitalLoginController@logout')->name('hospital.logout');
  Route::post('/logout', 'Auth\HospitalLoginController@logout')->name('hospital.logout');
 Route::get('/register','HospitalRegisterController@Form')->name('hospital.register');
  Route::post('/register','HospitalRegisterController@hregister')->name('hospital.register.submit');
// Password reset route...
  Route::post('/password/email', 'Auth\HospitalForgotPasswordController@sendResetLinkEmail')->name('hospital.password.email');
  Route::get('/password/reset', 'Auth\HospitalForgotPasswordController@showLinkRequestForm')->name('hospital.password.request');
  Route::post('/password/reset', 'Auth\HospitalResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\HospitalResetPasswordController@showResetForm')->name('hospital.password.reset');
});

//Department add in hospital
Route::prefix('hospitaldept')->group(function() {
Route::get('/add', 'hospitalDepartmentController@index');
Route::post('/save', 'hospitalDepartmentController@save');
Route::get('/manage', 'hospitalDepartmentController@manage');
Route::get('/edit{id}', 'hospitalDepartmentController@edit');
Route::post('/edit', 'hospitalDepartmentController@update');
Route::get('/delete/{id}', 'hospitalDepartmentController@delete');
});
/* hospital end*/

/* Add division */
Route::prefix('division')->group(function() {
Route::get('/save', 'divisionController@index');
Route::post('/save', 'divisionController@save');
Route::get('/manage', 'divisionController@manage');
Route::get('/edit{id}', 'divisionController@edit');
Route::post('/edit', 'divisionController@update');
Route::get('/delete/{id}', 'divisionController@delete');
});
/* End division */

/* Add district */
Route::prefix('district')->group(function() {
Route::get('/save', 'districtController@index');
Route::get('/thana/save', 'thanaController@managedivision');
Route::post('/save', 'districtController@save');
Route::get('/manage', 'districtController@manage');
Route::get('/edit{id}', 'districtController@edit');
Route::post('/edit', 'districtController@update');
Route::get('/delete/{id}', 'districtController@delete');
});
/* End district */

/* Add Thana */
Route::get('/thana/save', 'thanaController@index');
Route::post('/thana/save', 'thanaController@save');
Route::get('/thana/manage', 'thanaController@manage');
/* End Thana */

/* Add hospital */
Route::prefix('hospital')->group(function() {
Route::get('/add', 'AdminhospitalController@index');
Route::post('/save', 'AdminhospitalController@save');
Route::get('/manage', 'AdminhospitalController@manage');
Route::get('/edit{id}', 'AdminhospitalController@edit');
Route::post('/edit', 'AdminhospitalController@update');
Route::get('/delete/{id}', 'AdminhospitalController@delete');
});
/* End hospital */

/* Add department */
Route::prefix('department')->group(function() {
Route::get('/add', 'departmentController@index');
Route::post('/save', 'departmentController@save');
Route::get('/manage', 'departmentController@manage');
Route::get('/edit{id}', 'departmentController@edit');
Route::post('/edit', 'departmentController@update');
Route::get('/delete/{id}', 'departmentController@delete');
});
/* End department */

/* Add Doctor add */
Route::prefix('doctor')->group(function() {
Route::get('/add', 'adddoctorController@index');
Route::post('/save', 'adddoctorController@save');
Route::get('/manage', 'adddoctorController@manage');
Route::get('/edit/{id}', 'adddoctorController@edit');
Route::post('/edit', 'adddoctorController@update');
Route::get('/delete/{id}', 'adddoctorController@delete');
});
/* End Doctor end */

/* Add Doctor add */
Route::prefix('admindoctor')->group(function() {
Route::get('/add', 'AdmindoctorController@index');
Route::post('/save', 'AdmindoctorController@save');
Route::get('/manage', 'AdmindoctorController@manage');
Route::get('/edit/{id}', 'AdmindoctorController@edit');
Route::post('/edit', 'AdmindoctorController@update');
Route::get('/delete/{id}', 'AdmindoctorController@delete');
});
/* End Doctor end */



