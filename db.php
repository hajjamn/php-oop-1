<?php

require_once (__DIR__ . '/models/production.php');
require_once (__DIR__ . '/models/genre.php');


$kids = new Genre('Kids', 'film per bambini');

$adult = new Genre('Adult', 'film per adulti');

$peter = new Genre('Pietro', 'film per maestri back-end developers');

$genres = [
  $kids,
  $adult,
  $peter
];

$pippo = new Production('Pippo', 'Italiano', '8', $kids);

$pluto = new Production('Pluto', 'Inglese', '9', $kids);

$paperino = new Production('Paperino', 'Francese', '1', $kids);

$minnie = new Production('Minnie', 'Aramaico', '3', $adult);

$etaBeta = new Production('Eta-Beta', 'Tedesco', '7', $adult);

$gastone = new Production('Gastone', 'Spagnolo', '5', $kids);

$paperoga = new Production('Paperoga', 'Marocchino', '2', $adult);

$ciccio = new Production('Ciccio', 'Russo', '4', $kids);

$pietro = new Production('Pietro', 'Siciliano', '10', $peter);

$productions = [
  $pippo,
  $pluto,
  $paperino,
  $minnie,
  $etaBeta,
  $gastone,
  $paperoga,
  $ciccio,
  $pietro
];