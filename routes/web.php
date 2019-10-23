<?php

$router->group(['prefix' => '/api/' . env('VERSION')], function () use ($router) {
  $router->get('/stores', 'StoreController@getAll');
  $router->get('/store/{storeId}', 'StoreController@getByStoreId');
  $router->post('/store', 'StoreController@store');
});