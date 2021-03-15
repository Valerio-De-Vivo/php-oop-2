<?php 
require_once 'User.php';

class Genere extends User 
{
    public $genere;

    public function setGenere($genere) {
        $this->genere = $genere; 
    }

    public function getgenere() {
        return $this->genere;
    }
}