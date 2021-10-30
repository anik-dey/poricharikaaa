<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//Auth
Auth::routes();

//Admin Panel
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin-home', 'AdminController@home')->name('admin-home');
    // Route::get('/admin-house-maid-list', 'AdminController@housemaidlist')->name('housemaidlist');

    //Customers Contact
    Route::get('/admin-customers-contact-list', 'AdminContactListController@view')->name('customers-contactlist');
    Route::get('/client-message-delete/{contact_id}','AdminContactListController@clientdelete')->name('client-message-delete');

    Route::get('/admin/house-maid-list', 'AdminController@housemaidlist')->name('housemaidlist');
    Route::get('/admin/house-maid-form', 'AdminController@housemaidform')->name('ahousemaidform');

    //Client Apply
    Route::get('/admin/house-maid-apply', 'AdminHouseMaidAppliesController@view')->name('housemaidapply');
    Route::get('/client-list-housemaid-delete/{h_m_client_id}','AdminHouseMaidAppliesController@clientdelete')->name('clientformdelete');

    //admin profile
    Route::get('/admin/profile', 'AdminProfileController@view')->name('adminprofile');
    Route::post('/admin/profile/save', 'AdminProfileController@saveprofile')->name('adminsaveprofile');

    //admin register
    Route::get('admin/register', 'AdminRegisterController@show')->name('adminregister');
    Route::post('/admin/register/save', 'AdminRegisterController@saveregister')->name('adminsaveregister');

    //admin change password
    Route::get('admin/change-password', 'AdminProfileController@show')->name('adminchangepass');
    Route::post('/admin/change-password/save', 'AdminProfileController@savepassword')->name('adminsavepassword');

});


Route::redirect('/', '/bn');
// Route::redirect('/bn', '/bn/#');

//Alternate Home Route
Route::get('/', 'BaseController@home')->name('main');



Route::group(['prefix' => '{language}'], function () {



    Route::get('/', 'BaseController@home')->name('home');

    //Nav-Menu
    Route::get('#aboutus-sec')->name('aboutus');
    Route::get('#services-sec')->name('services');
    Route::get('#policies-sec')->name('policies');
    Route::get('#contact-sec')->name('contact');

    // Services
    Route::get('/services/baby-care', 'BaseController@babycare')->name('babycare');
    Route::get('/services/nurse', 'BaseController@nurse')->name('nurse');
    Route::get('/services/house-maid', 'BaseController@housemaid')->name('housemaid');
    Route::get('/services/office-maid', 'BaseController@officemaid')->name('officemaid');
    Route::get('/services/office-assistant', 'BaseController@officeassistant')->name('officeassistant');
    Route::get('/services/beautician', 'BaseController@beautician')->name('beautician');
    Route::get('/services/tailor', 'BaseController@tailor')->name('tailor');
    Route::get('/services/rapid-service', 'BaseController@rapidservice')->name('rapidservice');

    //Coming Soon
    Route::get('/coming-soon', 'BaseController@soon')->name('coming-soon');

    // Forms
    Route::get('/forms/house-maid', 'HouseMaidFormController@housemaidform')->name('housemaidform');
    Route::get('/forms/office-maid', 'OfficeMaidFormController@officemaidform')->name('officemaidform');
    Route::get('/forms/office-assistant', 'OfficeAssistantFormController@officeassistantform')->name('officeassistantform');
    Route::get('/forms/nurse', 'NurseFormController@nurseform')->name('nurseform');
    Route::get('/forms/baby-care', 'BabyCareFormController@babycareform')->name('babycareform');
    Route::post('/forms/savehouse-maid', 'HouseMaidFormController@savehousemaidform')->name('savehousemaidform');
    //Contact
    Route::post('/contact-us', 'ContactFormController@store')->name('contact-us');



});
