<?php
return array(
    "database" => array
    (
        "user" => "user",
        "password" => "",
        "dns" => "mysql:host=127.0.0.1;dbname=tracking_api;charset=UTF8"
    ),
    "redis" => array
    (
        "enabled" => true,
        "host" => "localhost:3030"
    ),
    "base_path" => "/", // change if you have application in subdirectory on the host
    "environment" => "development", // development environment will enable stack trace in error messages
);