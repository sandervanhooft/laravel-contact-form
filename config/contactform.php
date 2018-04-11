<?php

return [
    'from' => [
        'address' => config('mail.from.address'),
        'name' => config('mail.from.name'),
    ],
    'route_create' => [
        'url' => '/contact',
        'name' => 'contactform.create',
    ],
    'route_store' => [
        'url' => '/contact',
        'name' => 'contactform.store',
    ],
    'view' => [
        'section_key' => 'content',
    ],
];
