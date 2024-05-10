<?php

require_once (__DIR__ . '/genre.php');
class Production
{
  public $title;
  public $language;
  public $vote;
  public $genre;

  public function __construct($_title, $_language, $_vote, Genre $_genre)
  {
    $this->title = $_title;
    $this->language = $_language;
    $this->vote = $_vote;
    $this->genre = $_genre;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function getVote()
  {
    return $this->vote;
  }

}
;