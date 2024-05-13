<?php

require_once(__DIR__.'/production.php');
class Movie  extends Production {
    public $duration;
    public $profits;
    public function __contrusct($_title, $_language, $_vote, Genre $_genre, $_duration, $_profits) {
        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->profits = $_profits;
        $this->duration = $_duration;
    }
}