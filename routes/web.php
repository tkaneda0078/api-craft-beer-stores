<?php

$router->group(['prefix' => '/api/' . env('VERSION')], function () use ($router) {
  $router->get('/stores', 'StoreController@getAll');
  $router->get('/store/{storeId}', 'StoreController@getByStoreId');
  $router->post('/store', 'StoreController@store');
  $router->put('/store/{storeId}', 'StoreController@update');
  $router->delete('/store/{storeId}', 'StoreController@destroy');
});