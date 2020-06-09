<?php

return [
    'title' => 'Множество как список с повторяющимися элементами',
    'description' =>
        "Мы указали, что множество представляется как список без повторяющихся элементов. " .
        "Допустим теперь, что мы разрешаем повторяющиеся элементы. " .
        "Например, множество {1,2,3} могло бы быть представлено как список (2 3 2 1 3 2 2). " .
        "Разработайте процедуры element-of-set?, adjoin-set, union-set и intersection-set, которые бы работали с таким представлением. " .
        "Как соотносится эффективность этих операций с эффективностью соответствующих процедур для представления без повторений? " .
        "Существуют ли приложения, в которых Вы бы использовали скорее это представление, чем представление без повторений?"
];
