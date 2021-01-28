<?php

/**
 * @param string $text
 *
 * @return array
 */
function countPopularWords(string $text): array
{
    preg_match_all('/\W?(\w+)\'?\w*\W?/mu', mb_strtolower($text), $matches);
    $result = array_count_values($matches[1]);
    arsort($result);

    return array_slice($result, 0, 5);
}
