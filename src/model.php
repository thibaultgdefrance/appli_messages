<?php
function getMessages(){
    $bdd = new PDO('mysql:host=localhost;dbname=app_messages', '', '');

    $messages = $bdd->query('select * from messages order by id desc');
    return $messages;
}

function addMessages(){
    $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : '';
    $texte = isset($_POST['texte']) ? $_POST['texte'] : '';

    if isset($_POST){
        bdd_insert ('INSERT INTO message (auteur, texte) VALUES  (:auteur, :texte)', [
            'auteur'=>$auteur,
            'texte'=>$texte
        ]);
    }
}
