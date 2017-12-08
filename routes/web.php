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
Route::get('services', 'WelcomeController@services');
Route::get('contact.ruhul', 'WelcomeController@contact');




//Admin Controller Here || GET Method Below===============================
Route::get('/admin', 'AdminController@index');
Route::get('/admin/index2', 'AdminController@index2');
Route::get('/admin/index3', 'AdminController@index3');
Route::get('/admin/form_page', 'AdminController@form_page');
Route::get('/admin/form_advanced', 'AdminController@form_advanced');
Route::get('/admin/form_validation', 'AdminController@form_validation');
Route::get('/admin/form_wizards', 'AdminController@form_wizards');
Route::get('/admin/form_upload', 'AdminController@form_upload');
Route::get('/admin/form_buttons', 'AdminController@form_buttons');
Route::get('/admin/general_elements', 'AdminController@general_elements');
Route::get('/admin/media_gallery', 'AdminController@media_gallery');
Route::get('/admin/typography', 'AdminController@typography');
Route::get('/admin/icons', 'AdminController@icons');
Route::get('/admin/glyphicons', 'AdminController@glyphicons');
Route::get('/admin/widgets', 'AdminController@widgets');
Route::get('/admin/invoice', 'AdminController@invoice');
Route::get('/admin/inbox', 'AdminController@inbox');
Route::get('/admin/calendar', 'AdminController@calendar');
Route::get('/admin/tables', 'AdminController@tables');
Route::get('/admin/tables_dynamic', 'AdminController@tables_dynamic');
Route::get('/admin/chartjs', 'AdminController@chartjs');
Route::get('/admin/chartjs2', 'AdminController@chartjs2');
Route::get('/admin/morisjs', 'AdminController@morisjs');
Route::get('/admin/echarts', 'AdminController@echarts');
Route::get('/admin/other_charts', 'AdminController@other_charts');
Route::get('/admin/fixed_sidebar', 'AdminController@fixed_sidebar');
Route::get('/admin/fixed_footer', 'AdminController@fixed_footer');
Route::get('/admin/e_commerce', 'AdminController@e_commerce');
Route::get('/admin/projects', 'AdminController@projects');
Route::get('/admin/project_detail', 'AdminController@project_detail');
Route::get('/admin/contacts', 'AdminController@contacts');
Route::get('/admin/profile', 'AdminController@profile');
Route::get('/admin/page_403', 'AdminController@page_403');
Route::get('/admin/page_404', 'AdminController@page_404');
Route::get('/admin/page_500', 'AdminController@page_500');
Route::get('/admin/plain_page', 'AdminController@plain_page');
Route::get('/admin/plain_page', 'AdminController@plain_page');
Route::get('/admin/pricing_tables', 'AdminController@pricing_tables');
Route::get('/admin/level2', 'AdminController@level2');


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

Route::post('contact_message', 'WelcomeController@contact_message');


Route::post('/admin/admin_login_check', 'AdminController@admin_login_check');

//Post Category =================
Route::post('/admin/user_register', 'AdminController@user_register');
Route::post('/admin/category_create', 'SuperAdminController@category_create');
Route::post('admin/category_udpate', 'SuperAdminController@category_udpate');

//Post Blog======================
Route::post('/admin/blog_create', 'SuperAdminController@blog_create');
Route::post('/admin/blog-update', 'SuperAdminController@blog_update');
