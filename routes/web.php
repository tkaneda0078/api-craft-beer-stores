<?php

$router->get('/api/' . env('VERSION') . '/stores', 'StoreController@getAll');
$router->get('/api/' . env('VERSION') . '/store/{storeId}', 'StoreController@getByStoreId');