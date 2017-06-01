<?php


namespace appli_message\Domain;


class Message


{

    /**

     * message id.

     *

     * @var integer

     */

    private $id;


    /**

     * message auteur.

     *

     * @var string

     */

    private $auteur;


    /**

     * message texte..

     *

     * @var string

     */

    private $texte;


    public function getId() {

        return $this->id;

    }


    public function setId($id) {

        $this->id = $id;

        return $this;

    }


    public function getAuteur() {

        return $this->auteur;

    }


    public function setAuteur($auteur) {

        $this->auteur = $auteur;

        return $this;

    }


    public function getTexte() {

        return $this->texte;

    }


    public function setTexte($texte) {

        $this->texte = $texte;

        return $this;

    }

}
