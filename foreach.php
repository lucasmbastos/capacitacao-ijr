<?php

$familyGriffin = [
    5 => "Stewie",
    4 => "Brian",
    3 => "Meg",
    1 => "Lois",
    0 => "Peter",
    2 => "Chris"
];

for($i = 0; $i < count($familyGriffin); $i++)
    echo $familyGriffin[$i] . PHP_EOL;

readline("Next...");

$familyGriffin = [
    "cachorro" => "Brian",
    "filha" => "Meg",
    "mae" => "Lois",
    "pai" => "Peter",
    "filho" => "Chris",
    "genio do mau" => "Stewie"
];

foreach ($familyGriffin as $person)
    printf("%s\n", $person);