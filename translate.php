<?php
declare(strict_types=1);

function toString(array $games): string
{
    $msg = '';
    foreach ($games as $key => $game) {
        $msg .= 'Game #' . ($key+1) . PHP_EOL;
        foreach ($game as $item) {
            $msg .= '[' . $item . '] ';
        }
        $msg .= PHP_EOL;
        $msg .= PHP_EOL;
    }
    return $msg;
}
