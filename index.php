<?php

declare(strict_types=1);

require_once('numbers.php');
require_once('sort.php');
require_once('translate.php');

/* Configuration */
$players = 20;
$gamesForPlayers = 6;


$availableNumbers = generateNumbers();

$games = [];
while (count($games) < ($players * $gamesForPlayers)) {
    $game = sortGame($availableNumbers);

    if (checkIsUniqueGame($games, $game)) {
        $games[] = $game;
    }
}

echo toString($games);
