<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/products', [ProductsController::class, 'getAllProducts']);
// Route::get('/products/{id}', [ProductsController::class, 'getProductById']);
// Route::post('/products', [ProductsController::class, 'addProduct']);

Route::apiResources([
    'products' => ProductsController::class,
    'comments' => CommentsController::class,
    //     'prefix' => 'products',
//     'as' => 'api.',
//    'middleware' => ['auth:sanctum'],
]);

Route::post('/messages', [MessageController::class, 'store']);

// Route::post('/products', 'ProductsController@addProduct');
// Route::get('/products', 'ProductsController@getAllProducts');
// Route::get('/products/{id}', 'ProductsController@getProductById');
// Route::post('/products', 'ProductsController@addProduct');
// Route::put('/products/{id}', 'ProductsController@updateProduct');
// Route::patch('/products/{id}', 'ProductsController@updateProduct');
// Route::delete('/products/{id}', 'ProductsController@deleteProduct');

// Route::get('/categories', 'CategoryController@index');
// Route::get('/categories/{id}', 'CategoryController@show');
// Route::post('/categories', 'CategoryController@store');
// Route::put('/categories/{id}', 'CategoryController@update');
// Route::delete('/categories/{id}', 'CategoryController@destroy');

// Route::get('/suppliers', 'SupplierController@index');
// Route::get('/suppliers/{id}', 'SupplierController@show');
// Route::post('/suppliers', 'SupplierController@store');
// Route::put('/suppliers/{id}', 'SupplierController@update');
// Route::delete('/suppliers/{id}', 'SupplierController@destroy');

// Route::get('/customers', 'CustomerController@index');
// Route::get('/customers/{id}', 'CustomerController@show');
// Route::post('/customers', 'CustomerController@store');
// Route::put('/customers/{id}', 'CustomerController@update');
// Route::delete('/customers/{id}', 'CustomerController@destroy');

// Route::get('/employees', 'EmployeeController@index');
// Route::get('/employees/{id}', 'EmployeeController@show');
// Route::post('/employees', 'EmployeeController@store');
// Route::put('/employees/{id}', 'EmployeeController@update');
// Route::delete('/employees/{id}', 'EmployeeController@destroy');

// Route::get('/transactions', 'TransactionController@index');
// Route::get('/transactions/{id}', 'TransactionController@show');
// Route::post('/transactions', 'TransactionController@store');
// Route::put('/transactions/{id}', 'TransactionController@update');
// Route::delete('/transactions/{id}', 'TransactionController@destroy');

// Route::get('/product-categories', 'ProductCategoryController@index');
// Route::get('/product-categories/{id}', 'ProductCategoryController@show');
// Route::post('/product-categories', 'ProductCategoryController@store');
// Route::put('/product-categories/{id}', 'ProductCategoryController@update');
// Route::delete('/product-categories/{id}', 'ProductCategoryController@destroy');


// Route::get('/products', 'ProductController@index');
// Route::get('/products/{id}', 'ProductController@show');
// Route::post('/products', 'ProductController@store');
// Route::put('/products/{id}', 'ProductController@update');
// Route::delete('/products/{id}', 'ProductController@destroy');

// Route::get('/orders', 'OrderController@index');
// Route::get('/orders/{id}', 'OrderController@show');
// Route::post('/orders', 'OrderController@store');
// Route::put('/orders/{id}', 'OrderController@update');
// Route::delete('/orders/{id}', 'OrderController@destroy');


// Route::get('/order-items', 'OrderItemController@index');
// Route::get('/order-items/{id}', 'OrderItemController@show');
// Route::post('/order-items', 'OrderItemController@store');
// Route::put('/order-items/{id}', 'OrderItemController@update');
// Route::delete('/order-items/{id}', 'OrderItemController@destroy');

// Route::get('/payment-methods', 'PaymentMethodController@index');
// Route::get('/payment-methods/{id}', 'PaymentMethodController@show');
// Route::post('/payment-methods', 'PaymentMethodController@store');
// Route::put('/payment-methods/{id}', 'PaymentMethodController@update');
// Route::delete('/payment-methods/{id}', 'PaymentMethodController@destroy');
