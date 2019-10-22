<?php

$router->get('/api/' . env('VERSION') . '/stores', 'StoreController@getAll');