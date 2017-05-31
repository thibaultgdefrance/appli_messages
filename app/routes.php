<?php


// Home page

$app->get('/', function () {

    require '../src/model.php';

    $messages = getMessages();


    ob_start();             // start buffering HTML output

    require '../views/view02.php';

    $view = ob_get_clean(); // assign HTML output to $view

    return $view;

});
