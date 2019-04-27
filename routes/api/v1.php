<?php

// Version 1

$api->get("/", function () {
    return "Laravel API";
})->name("home");

$api->get("/users", "UserController@index")->name("users.index");
