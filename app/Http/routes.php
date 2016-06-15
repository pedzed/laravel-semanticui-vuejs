<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
]);
