<?php

require_once ('models/production.php');

$productions = [];

$productions[] = $pippo = new Production('Pippo', 'Italiano', '8');

$productions[] = $pluto = new Production('Pluto', 'Inglese', '9');