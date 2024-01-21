<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/info', 'Home::info');

$routes->get('/cici ', 'Home::cici ');

$routes->get('/admin','Admin::index');



// Router untuk produk

$routes->get('/product','Product::index');

$routes->get('/product/insert','Product::Insert::index');

$routes->get('/product/insert','Product::Insert');

// Router untuk category
$routes->get('/category','Category::index');

//Blog
$routes->get('/post','Post::index');
$routes->get('/post/insert','Post::insert');
$routes->get('/post/save','Post::save');

//Melewatkan parameter di route

//$routes->get('/post/(:any)','Post::post/$1');

$routes->get('/post/(:num)/comment/(:num)','Post::comment/$1/$2');

$routes->get('/cart/(:num)/product/(:num)','Cart::product/$1/$2');

//admin
$routes->get('/admin','Admin::index');

//CRUD Product
$routes->get('admin/product','Product::index');
$routes->get('admin/product/create','Product::create',['as'=>'product.create']);
$routes->post('admin/product/store','Product::store');
$routes->get('admin/product/edit/(:num)','Product::edit/$1');
$routes->post('admin/product/update/(:num)','Product::update/$1');
$routes->get('admin/product/delete/(:num)','Product::delete/$1');
$routes->get('admin/product/find/(:num)','Product::find/$1');

//data training
$routes->get('admin/training','Training::index');
$routes->get('admin/training/create','Training::create',['as'=>'training.create']);
$routes->post('admin/training/store','Training::store');
$routes->get('admin/training/edit/(:num)','Training::edit/$1');
$routes->post('admin/training/update/(:num)','Training::update/$1');
$routes->get('admin/training/delete/(:num)','Training::delete/$1');
$routes->get('admin/training/find/(:num)','Training::find/$1');



//testing
$routes->get('admin/testing','Testing::index');
$routes->get('admin/testing/create','Testing::create',['as'=>'testing.create']);
$routes->post('admin/testing/store','Testing::store');
$routes->get('admin/testing/edit/(:num)','Testing::edit/$1');
$routes->post('admin/testing/update/(:num)','Testing::update/$1');
$routes->get('admin/testing/delete/(:num)','Testing::delete/$1');
$routes->get('admin/testing/find/(:num)','Testing::find/$1');


//prediksi
$routes->get('/admin/prediksi','Prediksi::index');
$routes->get('admin/prediksi/create','Prediksi::create',['as'=>'prediksi.create']);
$routes->post('admin/prediksi/store','Prediksi::store');
$routes->get('admin/prediksi/edit/(:num)','Prediksi::edit/$1');
$routes->post('admin/prediksi/update/(:num)','Prediksi::update/$1');
$routes->get('admin/prediksi/delete/(:num)','Prediksi::delete/$1');
$routes->get('admin/prediksi/find/(:num)','Prediksi::find/$1');

//profile
$routes->get('/admin/profile','Profile::index');

//upload
$routes->get('/admin/upload','Upload::index');


//berkas
$routes->get('/admin/berkas','Berkas::berkas');

// membuat login admin
$routes->get('/', 'Home::index::index');

$routes->get('/login','Auth::index');
$routes->post('/proseslogin', 'Auth::proses');

//file
$routes->get('/', 'Upload::index');
$routes->match(['get', 'post'], 'Upload/importCsvToDb', 'Upload::importCsvToDb');

