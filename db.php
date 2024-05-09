<?php

require_once (__DIR__ . '/models/production.php');
require_once (__DIR__ . '/models/genre.php');

$genres = [];

$genres[] = $kids = new Genre('Kids', 'film per bambini');

$genres[] = $adult = new Genre('Adult', 'film per adulti');

$genres[] = $peter = new Genre('Pietro', 'film per maestri back-end developers');


$productions = [];

$productions[] = $pippo = new Production('Pippo', 'Italiano', '8', $kids);

$productions[] = $pluto = new Production('Pluto', 'Inglese', '9', $kids);

$productions[] = $paperino = new Production('Paperino', 'Francese', '1', $kids);

$productions[] = $minnie = new Production('Minnie', 'Aramaico', '3', $adult);

$productions[] = $etaBeta = new Production('Eta-Beta', 'Tedesco', '7', $adult);

$productions[] = $gastone = new Production('Gastone', 'Spagnolo', '5', $kids);

$productions[] = $paperoga = new Production('Paperoga', 'Marocchino', '2', $adult);

$productions[] = $ciccio = new Production('Ciccio', 'Russo', '4', $kids);

$productions[] = $pietro = new Production('Pietro', 'Siciliano', '10', $peter);