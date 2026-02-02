<?php
return [
    'page_title' => "Invoise",
    'currency' => '$',
    'input_fields' => [
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'email' => 'Email',
    ],
    'field_types' => [
        'product' => [
            'product_title' => 'Name',
            'product_quantity' => 'Quantity',
            'product_amount' => 'Amount',
        ],
        'work' => [
            'id' => '#',
            'name' => 'Name',
            'service_description' => 'Service description',
            'hours_of_work' => 'Worked(hours)',
            'rate' => 'Rate'
        ]
    ],
    'company_information' => [
        'name' => 'My First Company',
        'address' => 'Street Address City, Country',
    ],
    'employee_work_records' => [
        2 => [
            'start_hour' => '08:00',
            'end_hour' => '17:00'
        ],
        3 => [
            'start_hour' => '09:00',
            'end_hour' => '18:00'
        ],
        4 => [
            'start_hour' => '08:35',
            'end_hour' => '17:47'
        ],
        5 => [
            'start_hour' => '08:55',
            'end_hour' => '13:50'
        ],
    ],
    'roles' => [
        1 => 'Admin',
        2 => 'Accountant',
        3 => 'Developer',
        4 => 'Guard'
    ]
];