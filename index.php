<?php 

class User
{
    public $id;
    public $nome;
    public $cognome;
    public $nomeUtente;
    public $mail;
    protected $password;
    public $numero_articoli_pub;
    public $data_iscrizione;
    public $tipologia_articoli;


    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

$user1 = new User('Valerio','De Vivo');
$user1->id = 1;

var_dump($user1);
