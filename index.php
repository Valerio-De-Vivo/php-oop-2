<?php 
require_once 'Genere.php';

$user1 = new User('Valerio','De Vivo');
$user1->setId();
$user1->getId();
$user1->mail = 'valdev@gmail.com';
$user1->pass('sdauguadsgu');
$user1->numero_articoli_pub = 3;
$user1->tipologia_articoli = 'Romanzi';
$user1->data_iscrizione = date('l jS \of F Y h:i:s A');


var_dump($user1);




$user2 = new Genere('Fabio','Gerardi');

$user2->setGenere('fantasy');
$user2->getGenere();
$user2->setId();
$user2->getId();
$user2->mail = 'fager@gmail.com';
$user2->pass('guftftuf');
$user2->numero_articoli_pub = 1;
$user2->tipologia_articoli = 'Biografia';
$user2->data_iscrizione = date('l jS \of F Y h:i:s A');

var_dump($user2);


