<?php

require_once __DIR__ . "/MovieInfos.php";

class Movie{
  public $title;
  public $length;
  public $movieInfos;

  function __construct($_title, $_length, MovieInfos $_movieInfos){
    $this->title = $_title;
    $this->length = $this->getTime($_length);
    $this->movieInfos = $_movieInfos;
  }

  public function getTime($_length){
    return number_format($_length/60, 2, '.', "") . ' ore';
  }
}