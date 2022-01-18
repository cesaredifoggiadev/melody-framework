<?php

/*
*   Setting in this file the config variable for database connection
*   Different types of connections can be set:
*   mysql, sql, sqlite
*/
return [

    /*
    *   This property define wich connection id set as default
    */
    'default_connection' => 'myqsl',

    /*
    *   Set the connection credentials and parameters
    *   for the various connections in this property
    */
    'db' => [

        'mysql' => [
            'host' => '127.0.0.1',
            'port' => '8889',
            'db' => 'genovese',
            'username' => 'root',
            'password' => 'root',
            'options' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        ],

        'sql' => [
            'host' => '127.0.0.1',
            'port' => '8889',
            'db' => 'genovese',
            'username' => 'root',
            'password' => 'root',
            'options' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        ],

        'sqlite' => [
            'data_src' => '',
            'version' => '3',
            'password' => 'root',
            'options' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        ],

    ]

];