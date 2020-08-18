<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','frontend\HomeController@ViewHomaPage')->name('homepage');
Route::get('/singlepage','frontend\HomeController@ViewSinglePage')->name('SinglePage');
Route::get('/login','AuthController@ShowLoginPage');

Route::group(['namespace'=>'frontend'],function(){
    Route::get('/','NoticeBoardController@GetNotice')->name('homepage');
    Route::get('/notice-view/{id}','NoticeBoardController@SingleNoticeView')->name('SingleNoticeView');
    Route::get('/department-view/{id}','NoticeBoardController@ViewDepartment')->name('frontend.ViewDepartment');
    Route::get('/varsity-view','NoticeBoardController@ViewAbout')->name('frontend.ViewAbout');

});

Route::group(['prefix'=>'admin','middleware'=>'AdminCheck','namespace'=>'backend'],function(){
Route::get('/desh_board','HomeController@ViewHomePage')->name('deshboard');
Route::get('/users','UserController@UserList')->name('UserList');
Route::get('/admin-users/{id}','UserController@AdminUser')->name('admin-list');

Route::get('/user-profile-edit/{id}','UserController@UserProfileEdit')->name('UserProfileEdit');
Route::post('/user-profile-update/{id}','UserController@UserProfileUpdate')->name('UserProfileUpdate');
Route::get('/user-profile-view/{id}','UserController@UserProfileView')->name('UserProfileView');
Route::get('/user-profile-delete/{id}','UserController@UserProfileDelete')->name('UserProfileDelete');
Route::post('/add_notice','NoticeBoardController@AddNoticeBoard')->name('addnotice');
Route::get('/status-active/{id}','NoticeBoardController@StatusActive')->name('StatusActive');
Route::get('/status-inactive/{id}','NoticeBoardController@StatusInactive')->name('StatusInactive');
Route::get('/notice-edit/{id}','NoticeBoardController@NoticeEdit')->name('NoticeEdit');
Route::post('/notice-update/{id}','NoticeBoardController@NoticeUpdate')->name('NoticeUpdate');
Route::get('/notice-view/{id}','NoticeBoardController@NoticeView')->name('NoticeView');
Route::get('/notice-delete/{id}','NoticeBoardController@NoticeDelete')->name('NoticeDelete');
Route::get('/view-department','NoticeBoardController@ViewDepartment')->name('ViewDepartment');
Route::post('/add-department','NoticeBoardController@AddDepartment')->name('AddDepartment');
Route::post('/add-department','NoticeBoardController@AddDepartment')->name('AddDepartment');

});
Route::group(['namespace'=>'backend','middleware'=>'CheckTeacher'],function(){
    Route::get('/teacher-deshboard','TeacherController@TeacherDeshBoard')->name('teacherDeshboard');
    Route::post('/teacher-add_notice','TeacherController@AddNoticeBoard')->name('addnotice');
    Route::get('/teacher-notice-edit/{id}','TeacherController@NoticeEdit')->name('NoticeEdit');
    Route::post('/teacher-notice-update/{id}','TeacherController@NoticeUpdate')->name('NoticeUpdate');
    Route::get('/teacher-notice-view/{id}','TeacherController@NoticeView')->name('NoticeView');
    Route::get('/teacher-notice-delete/{id}','TeacherController@NoticeDelete')->name('NoticeDelete');
    Route::get('/status-active/{id}','TeacherController@StatusActive')->name('StatusActive');
    Route::get('/status-inactive/{id}','TeacherController@StatusInactive')->name('StatusInactive');

});

Route::group(['namespace'=>'frontend',],function(){
Route::get('/login','FrontendAuthController@ShowLoginPage')->name('login');
Route::post('/login','FrontendAuthController@ProcessLogin')->name('login');

Route::get('/register','FrontendAuthController@ShowRegisterPage')->name('register');
Route::get('/varifyEmail/{token}','FrontendAuthController@varifyEmail')->name('varifyEmail');
Route::post('/register','FrontendAuthController@ProcessRegister')->name('register');
Route::get('/logout', 'FrontendAuthController@processLogout')->name('logout');
});





// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
