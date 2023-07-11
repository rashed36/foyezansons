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

/*...............frontend................*/
Route::get('/', 'frontendController@homefronted')->name('homefronted');
Route::get('/aboute', 'frontendController@aboute')->name('aboute');
Route::get('/home_contact', 'frontendController@contact')->name('home_contact');
Route::get('/home_products', 'frontendController@home_products')->name('home_products');
Route::get('/home_men', 'frontendController@home_men')->name('home_men');
Route::get('/children', 'frontendController@children')->name('children');
Route::get('/home_furnishings', 'frontendController@home_furnishings')->name('home_furnishings');
Route::get('/home_accessories', 'frontendController@home_accessories')->name('home_accessories');
Route::get('/strenghs', 'frontendController@strenghs')->name('strenghs');
Route::get('/achivements', 'frontendController@achivements')->name('achivements');
Route::get('/world_wide_office', 'frontendController@uk_office')->name('world_wide_office');
Route::get('/bd_office', 'frontendController@bd_office')->name('bd_office');
Route::get('/carrier', 'frontendController@carrier')->name('carrier');
Route::post('/send_carrier', 'frontendController@sendEmail')->name('send_carrier');
Route::get('/our_products', 'frontendController@our_products')->name('our_products');


Route::get('/company_profile', 'frontendController@company_profile')->name('company_profile');
Route::get('/board_of_directors', 'frontendController@bord_of_directors')->name('board_of_directors');
Route::get('/our_services', 'frontendController@our_services')->name('our_services');
Route::get('/responsibilities_and_capabilities', 'frontendController@responsibilities_and_capabilities')->name('responsibilities_and_capabilities');
Route::get('/vision_miission_and_values', 'frontendController@vision_miission_and_values')->name('vision_miission_and_values');
Route::get('/staff_members', 'frontendController@staff_members')->name('staff_members');
Route::get('/work_with_us', 'frontendController@work_with_us')->name('work_with_us');
Route::get('/director1', 'frontendController@director1')->name('director1');
Route::get('/director2', 'frontendController@director2')->name('director2');

Route::get('/director_profile/{id}', 'frontendController@director_profile')->name('director_profile');



Route::get('/product_name_v/{id}', 'frontendController@product_name_v')->name('product_name_v');
Route::get('/home_products_v/{id}', 'frontendController@home_products_v')->name('home_products_v');

//single Product
Route::get('/single_product/{id}', 'frontendController@single_product')->name('single_product');




Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


/*...............ChangePassword................*/
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');







/*...............home_image................*/

Route::get('/home_image', 'home_image_controller@home_image')->name('home_image')->middleware('auth');
Route::get('/delete_photo/{id}', 'home_image_controller@delete_photo')->name('delete_photo')->middleware('auth');
Route::get('/all_photo', 'home_image_controller@all_photo')->name('all_photo')->middleware('auth');
Route::post('/insurt_home_image', 'home_image_controller@insurt_home_image')->name('insurt_home_image')->middleware('auth');

// create Slider 
Route::get('home_slider','slider_controller@home_slider')->name('home_slider')->middleware('auth');
Route::get('all_slider','slider_controller@all_slider')->name('all_slider')->middleware('auth');
Route::get('/delete_slider/{id}', 'slider_controller@delete_slider')->name('delete_slider')->middleware('auth');
Route::post('/add_slider', 'slider_controller@add_slider')->name('add_slider')->middleware('auth');

//create office detils
Route::get('all_office_info','office_controller@all_office_info')->name('all_office_info')->middleware('auth');
Route::get('/home_office_info', 'office_controller@home_office_info')->name('home_office_info')->middleware('auth');
Route::post('/add_office_info', 'office_controller@add_office_info')->name('add_office_info')->middleware('auth');
Route::get('/edit_office_info/{id}', 'office_controller@edit_office_info')->name('edit_office_info')->middleware('auth');
Route::post('/update_office_info/{id}', 'office_controller@update_office_info')->name('update_office_info')->middleware('auth');


//create produce
Route::get('/home_create_product', 'home_image_controller@home_create_product')->name('home_create_product')->middleware('auth');
Route::post('/insurt_product_name_sub', 'home_image_controller@insurt_product_name_sub')->name('insurt_product_name_sub')->middleware('auth');
Route::get('/update_photo_p_name/{id}', 'home_image_controller@update_photo_p_name')->name('update_photo_p_name')->middleware('auth');
Route::post('/update_product_name/{id}', 'home_image_controller@update_product_name')->name('update_product_name')->middleware('auth');

Route::get('/all_productname', 'home_image_controller@all_productname')->name('all_productname')->middleware('auth');
Route::get('/edit_product/{id}', 'home_image_controller@edit_product')->name('edit_product')->middleware('auth');
Route::post('/update_product/{id}', 'home_image_controller@update_product')->name('update_product')->middleware('auth');
Route::get('/delete_photo_p_name/{id}', 'home_image_controller@delete_photo_p_name')->name('delete_photo_p_name')->middleware('auth');


/*...............about_us................*/
Route::get('/edit-about-us/{id}', 'about_us_controller@edit_see_about_us')->name('edit_see_about_us')->middleware('auth');
Route::get('/see_about_us', 'about_us_controller@see_about_us')->name('see_about_us')->middleware('auth');

Route::post('/update-about-us/{update_id}', 'about_us_controller@update_about_us')->name('update_about_us')->middleware('auth');

//create Staff
Route::get('/staff', 'StaffController@staff')->name('staff')->middleware('auth');
Route::get('/all_staff', 'StaffController@all_staff')->name('all_staff')->middleware('auth');
Route::post('/add_staff', 'StaffController@add_staff')->name('add_staff')->middleware('auth');
Route::get('/delete_staff/{id}', 'StaffController@delete_staff')->name('delete_staff')->middleware('auth');

/*...............contact_us................*/
Route::get('/contact_us', 'contact_us_controller@contact_us')->name('contact_us')->middleware('auth');
Route::get('/edit-contact-us/{id}', 'contact_us_controller@edit_contact_us')->name('edit_contact_us')->middleware('auth');
Route::post('/update-contact-us/{update_id}', 'contact_us_controller@update_contact_us')->name('update_contact_us')->middleware('auth');

//create Career
Route::get('/all_career', 'CarrierController@all_career')->name('all_career')->middleware('auth');

/*...............strenghs................*/
Route::get('/message_submit_view', 'strenghscontroller@message_submit_view')->name('message_submit_view')->middleware('auth');

Route::get('/b_strengths', 'strenghscontroller@b_strengths')->name('b_strengths')->middleware('auth');

Route::get('/edit-b-strengths/{id}', 'strenghscontroller@edit_b_strengths')->name('edit_b_strengths')->middleware('auth');
Route::post('/update-b-strengths/{update_id}', 'strenghscontroller@update_b_strengths')->name('update_b_strengths')->middleware('auth');





/*...............strenghs................*/
Route::get('/achievements', 'achievementscontroller@achievements')->name('achievements')->middleware('auth');

Route::get('/edit-achievements/{id}', 'achievementscontroller@edit_achievements')->name('edit_achievements')->middleware('auth');
Route::post('/update-achievements/{update_id}', 'achievementscontroller@update_achievements')->name('update_achievements')->middleware('auth');


/*...............message_submit................*/
Route::post('/message_submit', 'messagecontroller@message_submit')->name('message_submit');



//Meneging Director Routes
Route::get('managing_Director','DirectorController@managing_Director')->name('managing_Director')->middleware('auth');
Route::get('/all_managing_Director', 'DirectorController@all_managing_Director')->name('all_managing_Director')->middleware('auth');
Route::post('/add_managing_Director', 'DirectorController@add_managing_Director')->name('add_managing_Director')->middleware('auth');
Route::get('/edit_managing_Director/{id}', 'DirectorController@edit_managing_Director')->name('edit_managing_Director')->middleware('auth');
Route::post('/update_managing_Director/{id}', 'DirectorController@update_managing_Director')->name('update_managing_Director')->middleware('auth');
Route::get('/delete_managing_Director/{id}', 'DirectorController@delete_managing_Director')->name('delete_managing_Director')->middleware('auth');