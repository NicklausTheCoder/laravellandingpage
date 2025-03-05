<?php

use Illuminate\Routing\Router;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('abouts', aboutController::class);
    $router->resource('clients', ClientController::class);
    $router->resource('features', mainfeatureController::class);
    $router->resource('heroes', HeroesController::class);
    $router->resource('navigations', NavigationController::class);
    $router->resource('pricings', PricingController::class);
    $router->resource('services', ServicesController::class);
    $router->resource('testimonials', TestimonialController::class);
});
