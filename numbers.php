<?php
declare(strict_types=1);

function generateNumbers(int $initial = 1, int $final = 60): array
{
    $numbers = [];
    for ($i = $initial; $i <= $final; $i++) {
        $numbers[] = $i;
    }
    return $numbers;
}
