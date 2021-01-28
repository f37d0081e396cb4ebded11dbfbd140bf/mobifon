<?php

require_once 'functions.php';

echo "тесты:<br />\n";
print_out(highlight_nicknames('@storm87 сообщил нам вчера о результатах'));
print_out(highlight_nicknames('Я живу в одном доме с @300spartans'));
print_out(highlight_nicknames('Правильный ник: @usernick | неправильный ник: @usernick;'));
print_out(highlight_nicknames('@ник на русском'));
print_out(highlight_nicknames('something@right before a tag'));
print_out(highlight_nicknames('Hello, @nickname'));
print_out(highlight_nicknames('@ nickname - тест с пробелом'));
print_out(highlight_nicknames('тег в конце текста - @user'));
print_out(highlight_nicknames('@u - один символ'));
// print_out(highlight_nicknames(''));
// print_out(highlight_nicknames(''));
// print_out(highlight_nicknames(''));
// print_out(highlight_nicknames(''));

