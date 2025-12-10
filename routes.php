<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/register', 'views/register.php');
post('/user', 'auth.php');
any('/404','views/404.php');
