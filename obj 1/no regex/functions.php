<?php

function highlight_nicknames($text)
{
    $split = explode(' ', $text);

    foreach ($split as $idx => $word) {
        if ($word[0] == '@' && ctype_alpha($word[1]) && ctype_alnum(substr($word, 1))) {
            $split[$idx] = '<b>' . $word . '</b>';
        }
    }

    return implode(' ', $split);
}

function print_out($text, ...$args) {
    return printf($text . "<br />\n", ...$args);
}

