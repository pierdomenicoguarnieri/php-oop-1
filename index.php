<?php

class Movie{
  public $title;
  public $genre;
  public $length;

  function __construct($_title, $_genre, $_length){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->length = $this->getTime($_length);
  }

  public function getTime($_length){
    return number_format($_length/60, 2, '.', "") . ' ore';
  }
}

$batman = new Movie('Batman', 'Action', 130);
$spiderman = new Movie('Spiderman', 'Action', 200);

var_dump($batman);
var_dump($spiderman);