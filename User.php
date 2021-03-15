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

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;

        $this->nomeUtente = substr($nome, 0, 2) .substr($cognome, 0, 2) ;
    }

    public function setId(){
        $this->id = rand(1,10);
    }

    public function getId() {
        return $this->id;
    }

    public function pass($pass){
        $this->password = $pass;
    }
}
