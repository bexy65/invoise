<?php

require_once __DIR__.'/router.php';
require_once __DIR__.'/app/controllers/UserController.php';

get('/', 'views/index.php');
get('/login', 'views/login.php');
get('/create-user', 'views/register.php');

get('/account-settings', 'views/accountSettings.php');
get('/dashboard', 'views/dashboard.php');
get('/show-invoise', 'views/invoise.php');


// POST endpoints handled by auth.php
post('/create-user', 'auth.php');
post('/login', 'auth.php');
post('/logout', 'auth.php');


//API
get('/api/user/$id', function($id) {
    UserController::show($id);
});
get('/api/user', function() {
    UserController::show();
});
get('/api/user-work-records/$id', function($id){
    UserController::getEmployeeWorkRecords($id);
});


any('/404','views/404.php');