<?php

return [
    'title' => "Процедура solve-2nd",
    'description' => [
        '1' =>
        "Рис. 3.35. Диаграмма потока сигналов для решения линейного дифференциального уравнения второго порядка.",
        '2' =>
        "Рассмотрим задачу проектирования системы обработки сигналов для решения гомогенных линейных дифференциальных уравнений второго порядка",
        '3' =>
        "Выходной поток, моделирующий y, порождается сетью, содержащей цикл. " .
        "Этот цикл возникает потому, что значение d²y/dt² зависит от значений y и dy/dt, а они оба получаются интегрированием d²y/dt². " .
        "Диаграмма, которую нам хотелось бы закодировать, показана на рис. 3.35. " .
        "Напишите процедуру solve-2nd, которая в качестве аргументов берет константы a, b и dt и начальные значения y₀ и dy₀ для y и dy, и порождает поток последовательных значений y.",
    ],
];
