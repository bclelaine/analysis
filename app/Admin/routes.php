<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('platform', 'PlatformController');
    $router->resource('logistic', 'LogisticController');
    $router->resource('province', 'ProvinceController');
    $router->resource('city', 'CityController');
    $router->resource('distinct', 'DistinctController');
    $router->resource('user', 'UserController');
    $router->resource('shop', 'ShopController');
    $router->resource('category', 'CategoryController');
    $router->resource('good', 'GoodController');
    $router->resource('trade', 'TradeController');
    $router->resource('order', 'OrderController');
    $router->resource('waybill', 'WaybillController');
    $router->resource('analysis/category', 'AnalysisCategoryController');
});
