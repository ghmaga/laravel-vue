<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('categories', 'CategoriesController');
    $router->resource('advert_types', 'AdvertTypesController');
    $router->resource('adverts', 'AdvertsController');
    $router->resource('articles', 'ArticlesController');
    $router->resource('products', 'ProductsController');
    $router->resource('jobs', 'JobsController');
    $router->resource('pages', 'PagesController');
    $router->resource('pictures', 'PicturesController');
    $router->resource('configs', 'ConfigsController');
});
