<?php


use Illuminate\Http\Request;

$router->get('pegawai', 'UserController@users');
$router->get('pegawai/{id}', 'UserController@profileById');
$router->post('pegawai', 'UserController@store');
$router->put('pegawai/{id}', 'UserController@update');
$router->delete('pegawai/{id}', 'UserController@delete');
