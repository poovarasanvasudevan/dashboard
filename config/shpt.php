<?php
return [

    'parse_app_id' => 'myAppId',
    'parse_rest_key' => 'restKey',
    'parse_master_key' => 'myMasterKey',
    'parse_base_url' => 'http://localhost:1337',
    'parse_path' => 'parse',
    'parse_base' => 'http://10.1.28.72:1337/parse',
    'menu' => array(
        array(
            'icon' => 'zmdi zmdi-home',
            'title' => 'Home',
            'href' => '/home'
        ),
        array(
            'icon' => 'zmdi zmdi-account',
            'title' => 'Users',
            'href' => '/users'
        ),
        array(
            'icon' => 'zmdi zmdi-email',
            'title' => 'Messages',
            'href' => '/messages'
        ),
        array(
            'icon' => 'zmdi zmdi-notifications',
            'title' => 'Notification',
            'href' => '/notification'
        ),
        array(
            'icon' => 'zmdi zmdi-network-warning',
            'title' => 'Exception',
            'href' => '/exception'
        ),
        array(
            'icon' => 'zmdi zmdi-settings',
            'title' => 'Config',
            'href' => '/config'
        ),

    )
];