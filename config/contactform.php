<?php

return [
    'from_address' => config('mail.from.address'),
    'from_name' => config('mail.from.name'),

    'route_create_name' => 'contactform.create',
    'route_create_url' => '/contact',

    'route_store_name' => 'contactform.store',
    'route_store_url' => '/contact',

    'view_section_key' => 'content',
];
