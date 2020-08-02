<?php

return [
    'title' => "Правила для добавления приставок «пра» в отношение внук",
    'description' =>
        "Начав с базы данных и правил, сформулированных Вами в упражнении 4.63, постройте правила для добавления приставок «пра» в отношение внук. " .
        "Система должна уметь понять, что Ирад — правнук Адама, а Иавал и Иувал приходятся Адаму прапрапрапраправнуками. " .
        "(Подсказка: представляйте, например, утверждение об Ираде как ((пра внук) Адам Ирад). Напишите правила, которые определяют, заканчивается ли список словом внук. " .
        "С помощью этого определите правило, которое позволяет вывести отношение ((пра . ?rel) ?x ?y), где список ?rel оканчивается на внук.) Проверьте свои правила на запросах ((пра внук) ?g ?ggs) и (?relationship Адам Ирад).",
];
