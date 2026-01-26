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
            'service_description' => 'Service description',
            'hours_of_work' => 'Worked(hours)',
            'rate' => 'Rate'
        ]
    ],
    'workers' => [
        [
            'service_description' => 'Lumber cutting and sizing',
            'hours_of_work' => 4,
            'rate' => 20
        ],
        [
            'service_description' => 'Wood frame assembly',
            'hours_of_work' => 6,
            'rate' => 25
        ],
        [
            'service_description' => 'Sanding and finishing',
            'hours_of_work' => 3,
            'rate' => 18
        ],
        [
            'service_description' => 'Material transport and handling',
            'hours_of_work' => 2,
            'rate' => 15
        ]
    ],
    'company_information' => [
        'name' => 'My First Company',
        'address' => 'Street Address City, Country',
    ]
];