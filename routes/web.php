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

// Route::get('/', function () {
//     return view('welcome');
// });
//Public Foler Goes from here
Route::get('/', 'WelcomeController@index');
Route::get('portfolio', 'WelcomeController@portfolio');
Route::get('services', 'WelcomeController@services');
Route::get('contact.ruhul', 'WelcomeController@contact');




//Admin Controller Here || GET Method Below===============================
Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@login');
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin/register', 'AdminController@register');
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/admin/sideMenu', 'AdminController@sideMenu');


//Get Blog post =================
Route::get('/admin/blog_post_add', 'AdminController@blog_post_add');
Route::get('/admin/blog_post_manage', 'SuperAdminController@blog_post_manage');
Route::get('/unpublish-blog/{id}', 'SuperAdminController@unpublish_blog');
Route::get('/publish-blog/{id}', 'SuperAdminController@publish_blog');
Route::get('/blog-delete/{id}', 'SuperAdminController@blog_delete');
Route::get('/admin/blog-edit/{id}', 'SuperAdminController@blog_edit');
Route::get('/blog_by_category/{id}', 'WelcomeController@blog_by_category');
Route::get('/single_blog/{id}', 'WelcomeController@single_blogByBlogId');


//Get Category =================
Route::get('/admin/category_add', 'AdminController@category_add');
Route::get('/admin/category_manage', 'SuperAdminController@category_manage');
Route::get('/unpublish-category/{id}', 'SuperAdminController@unpublish_category');
Route::get('/publish-category/{id}', 'SuperAdminController@publish_category');
Route::get('/category-delete/{id}', 'SuperAdminController@category_delete');
Route::get('/admin/category-edit/{id}', 'SuperAdminController@categoryEditById');




//Admin Controller Here || POST Method Below===============================
Route::post('/admin/admin_login_check', 'AdminController@admin_login_check');

//Post Category =================
Route::post('/admin/user_register', 'AdminController@user_register');
Route::post('/admin/category_create', 'SuperAdminController@category_create');
Route::post('admin/category_udpate', 'SuperAdminController@category_udpate');

//Post Blog======================
Route::post('/admin/blog_create', 'SuperAdminController@blog_create');
Route::post('/admin/blog-update', 'SuperAdminController@blog_update');
