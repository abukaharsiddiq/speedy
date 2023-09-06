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
//     return view('index');
// });
Route::resource('/','MainHomePageController');
Route::resource('Home','MainHomePageController');
Route::get('HomeOrder/{id}','MainHomePageController@orderconform')->name('HomeOrder.orderconform');
Route::get('FbCategory/{id}','MainHomePageController@facebookCategoryView')->name('FbCategory.facebookCategoryView');
Route::get('About','MainHomePageController@about_page')->name('About.about_page');
Route::get('TERMS','MainHomePageController@pressRoom_page')->name('TERMS.pressRoom_page');
Route::get('PRIVACY','MainHomePageController@beApart_page')->name('PRIVACY.beApart_page');
Route::get('FAQS','MainHomePageController@rulesRegulation_page')->name('FAQS.rulesRegulation_page');
Route::get('frequent','MainHomePageController@frequent')->name('frequent.frequent');
Route::get('frequent','MainHomePageController@frequent')->name('frequent.frequent');
Route::get('ThirdCategory/{id}','MainHomePageController@thirdCategoryVeiew')->name('ThirdCategory.thirdCategoryVeiew');
Route::get('Discount','MainHomePageController@discountPlan_page')->name('Discount.discountPlan_page');
Route::get('Gallery','MainHomePageController@gallery_page')->name('Gallery.gallery_page');
Route::get('Contact','MainHomePageController@contact_page')->name('Contact.contact_page');
Route::get('ProductList','MainHomePageController@productList_info')->name('ProductList.productList_info');
Route::get('AgentList','MainHomePageController@agent_list')->name('AgentList.agent_list');
Route::resource('ContactEmail','ContactHomeController');
Route::resource('subCategory','subCategorycontroller');
Route::resource('NoticePage','noticeControllerOutsite');
Route::resource('video','VideoGalleryController');

Route::resource('Cart','CartController');
Route::get('Cart.singleCart','CartController@singleCart')->name('Cart.singleCart');



// --------------admin panel--
// Route::get('/admin', function(){
// 	return view('admin.index');
// });
Route::group(['middleware'=>'auth'],function(){
Route::resource('/admin','Admin_MainController');
Route::resource('SlideAdmin','sliderController');
Route::resource('ProductCategory','ProductCategoryController');
Route::resource('Product','ProductController');
Route::resource('Customer','CustomerMemberController');
Route::resource('Populer','PopulerProduct_controller');
Route::resource('OrderInfo','OrderInfoController');
Route::get('OrderCencel/{id}','OrderInfoController@orderCancel_method')->name('OrderCencel.orderCancel_method');
Route::get('OrderDelete/{id}','OrderInfoController@orderDelete_method')->name('OrderDelete.orderDelete_method');
Route::get('OrderCencelView','OrderInfoController@orderCancel_MemberView')->name('OrderCencelView.orderCancel_MemberView');
Route::get('Search','OrderInfoController@orderSearch')->name('Search.orderSearch');
Route::resource('GalleryAdmin','galleryController');
Route::resource('ThirdCategoryAdmin','third_categoryController');

Route::resource('Notice','noticeController');
Route::resource('adminHeadline','headlineInsiteController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');
