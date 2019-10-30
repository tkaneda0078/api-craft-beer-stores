<?php

$router->group(['prefix' => '/api/' . env('VERSION')], function () use ($router) {
  $router->get('/shops', 'shopController@getAll');
  $router->get('/shop/{shopId}', 'shopController@getByshopId');
  $router->post('/shop', 'shopController@shop');
  $router->put('/shop/{shopId}', 'shopController@update');
  $router->delete('/shop/{shopId}', 'shopController@destroy');
});