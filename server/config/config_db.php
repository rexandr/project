<?php

return [
    'dsn' => 'mysql:host=a_level_nix_mysql:3306;dbname=golovach;charset=utf8',
    'user' => 'root',
    'pass' => 'cbece_gead-cebfa',
    'options' => [
        \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC,  //transfer only assoc data from all queries
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,      //show all errors from DB
    ]
];