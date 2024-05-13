<?php

require_once(__DIR__.'/production.php');
class TVSerie  extends Production {
    public $seasons;
    public function __contrusct($_title, $_language, $_vote, Genre $_genre, $_seasons) {
        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->seasons = $_seasons;
    }
}