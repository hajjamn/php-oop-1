<?php

class Production
{
  public $title;
  public $language;
  public $vote;

  public function __construct($_title, $_language, $_vote)
  {
    $this->title = $_title;
    $this->language = $_language;
    $this->vote = $_vote;
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

$pippo = new Production('Pippo', 'Italiano', '8');

$pluto = new Production('Pluto', 'Inglese', '9');

var_dump($pippo, $pluto);