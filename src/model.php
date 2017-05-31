<?php
function getMessages(){
    $bdd = new PDO('mysql:host=localhost;dbname=app_messages', 'root', 'u1wj99cv');

    $messages = $bdd->query('select * from messages order by id desc');
    return $messages;
}
