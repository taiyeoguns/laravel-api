<?php

$api->get("/", function () {
    return "Laravel API";
});

$api->get("/users", "UserController@index")->name("users.index");
