<?php
$router->get('/', 'HomeController@index');
$router->get('/login', 'UserController@login');
$router->post('/login', 'UserController@loginPost');
$router->get('/register', 'UserController@register');
$router->post('/register', 'UserController@registerPost');
$router->get('/dashboard', 'UserController@dashboard');

$router->get('/request/create', 'RequestController@create');
$router->post('/request/store', 'RequestController@store');
$router->get('/request/view/{id}', 'RequestController@view');

$router->post('/comment/add', 'CommentController@add');

$router->get('/messages', 'MessageController@index');
$router->get('/message/send/{user_id}', 'MessageController@sendForm');
$router->post('/message/send', 'MessageController@send');
