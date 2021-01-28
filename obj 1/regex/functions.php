<?php

function highlight_nicknames($text) {
    return trim(preg_replace('/\s(@[A-Za-z][A-Za-z0-9]*)\s/', ' <b>$1</b> ', ' ' . $text . ' '));
}

function print_out($text, ...$args) {
    return printf($text . "<br />\n", ...$args);
}

