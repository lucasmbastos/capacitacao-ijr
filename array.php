<?php

$familySmith = ["Rick", "Summer", "Beth", "Morty", "Jerry"];
printf("%s é o avô de %s\n", $familySmith[0], $familySmith[3]);

readline("Next...");

$familyGriffin = [
    5 => "Stewie",
    4 => "Brian",
    3 => "Meg",
    1 => "Lois",
    0 => "Peter",
    2 => "Chris"
];

printf(
    "%s é casada com %s. %s é filha de ambos.\n",
    $familyGriffin[1],
    $familyGriffin[0],
    $familyGriffin[3]
);

readline("Next...");

$familyGriffin = [
    "cachorro" => "Brian",
    "filha" => "Meg",
    "mae" => "Lois",
    "pai" => "Peter",
    "filho" => "Chris",
    "genio do mau" => "Stewie"
];

printf(
    "%s é casada com %s. %s é filho de ambos.\n",
    $familyGriffin["mae"],
    $familyGriffin["pai"],
    $familyGriffin["genio do mau"]
);