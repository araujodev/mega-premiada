<?php
declare(strict_types=1);

function sortGame(array $availableNumbers): array
{
    $items = array_rand($availableNumbers, 6);
    $values = [];
    foreach ($items as $item) {
        $values[] = $availableNumbers[$item];
    }
    return $values;
}

function checkIsUniqueGame(array $games, array $game): bool
{
    foreach ($games as $gameUnit)
    {
        $matches = 0;
        foreach ($gameUnit as $number) {
            foreach ($game as $numberGenerated) {
                if($numberGenerated === $number) {
                    $matches++;
                }
            }
        }
        if($matches >= 6){
            return false;
            break;
        }
    }
    return true;

}
