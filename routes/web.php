<?php

$router->get('/api/' . env('VERSION') . '/stores', 'StoreController@getAll');
$router->get('/api/' . env('VERSION') . '/store/{storeId}', 'StoreController@getByStoreId');
$router->post('/api/' . env('VERSION') . '/store', 'StoreController@store');