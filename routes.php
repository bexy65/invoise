<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');
get('/login', 'views/login.php');
any('/404','views/404.php');
