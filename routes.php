<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/create-user', 'views/register.php');

post('/create-user', 'auth.php');

// POST endpoints handled by auth.php
post('/login', 'auth.php');
post('/logout', 'auth.php');

any('/404','views/404.php');