<?php

class Movie{
  public $title;
  public $genre;
  public $length;

  function __construct($_title, $_genre){
    $this->title = $_title;
    $this->genre = $_genre;
  }

  public function setTime($_length){
    $this->length = $_length/60;
  }
}