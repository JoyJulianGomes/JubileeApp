<?php

Route::set('register', function () {
    $regcon = new RegisterController();
    $regcon->indexAction();
});
Route::set('test', function () {
    $testcon = new TestController();
    $testcon->indexAction();
});

Route::setdefault('register');
Route::action($_GET['url']);
