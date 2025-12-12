<?php

return [
    "register_validation_form_rules" => [
        'email' => ['required' => true, 'email' => true],
        'first_name' => ['required' => true, 'min_length' => 2],
        'last_name' => ['required' => true, 'min_length' => 2],
        'password' => ['required' => true, 'min_length' => 6],
        'confirm_password' => ['required' => true, 'matches' => 'password']
    ],
];