<?php

class MovieInfos{
  public $genreArray;
  public $isAdult;

  function __construct($_genreArray, $_isAdult){
    $this->genreArray = $_genreArray;
    $this->isAdult = $_isAdult;
  }
}