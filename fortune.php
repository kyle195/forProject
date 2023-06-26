<?php
$fortunes = [
    "it is certain",
    "without a doubt",
    "you probaby just dumb :)",
    "yes, defentely",
    "it is decidedly so",
    "as i see it ,yes",
    "most likely",
    "yes!",
    "i dont know :|",
    "reply a bit hazy, try again",
    "are you a nicki fan???",
    "dont count on it",
    "try sticking peanut butter on your forehead",
    "as meghan trainer said, no no no",
    "what a lovely weather we have today"
];

$randomFortune = $fortunes[array_rand($fortunes)];
echo $randomFortune;
?>