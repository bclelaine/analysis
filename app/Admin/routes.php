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
    $router->resource('analysis/trade', 'AnalysisTradeController');
    $router->resource('analysis/category', 'AnalysisCategoryController');
    $router->resource('analysis/sales', 'AnalysisSalesController');
    $router->resource('analysis/expenditure', 'AnalysisExpenditureController');
    $router->resource('analysis/region', 'AnalysisRegionController');
    $router->resource('analysis/sex', 'AnalysisSexController');
    $router->resource('analysis/age', 'AnalysisAgeController');
    $router->resource('analysis/logistics', 'AnalysisLogisticsController');
    $router->resource('analysis/frequency', 'AnalysisFrequencyController');
});
