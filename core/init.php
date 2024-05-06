<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host'=> 'sql8.freesqldatabase.com',
        'username'=> 'sql8697588',
        'password'=> 'wvbCzfYPiF',
        'db'=> 'sql8697588',
    ),
        'remember' => array(
            'cookie_name'=> 'hash',
            'cookie_expiry' => '3600'
        ),
        'session' => array(
            'session_name'=> 'user'
        )
);

spl_autoload_register(function ($class) {
    require_once 'classes/'.$class . '.php';
});

require_once 'functions/sanitize.php';

