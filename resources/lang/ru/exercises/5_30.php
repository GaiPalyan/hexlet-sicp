<?php

return [
    'title' => "Система обработки ошибок",
    'description' => [
        '1' =>
        "Наш вычислитель отлавливает только два вида ошибок (и сообщает о них) — неизвестные типы выражений и неизвестные типы процедур. При других ошибках он будет выпадать из управляющего цикла. " .
        "Когда мы запускаем вычислитель с помощью имитатора регистровых машин, эти ошибки будут пойманы нижележащей Scheme-системой. Это похоже на «падение» компьютера в случае ошибки пользовательской программы. " .
        "Построить настоящую систему обработки ошибок — большой проект, но понимание, что за вопросы здесь возникают, стоит затраченных усилий.",
        '2' =>
        "а. При ошибках, возникающих в процессе вычисления, например, при попытке получить значение неопределенной переменной, можно заставить операцию просмотра окружения возвращать особый код ошибки, который не может служить значением пользовательской переменной. " .
        "Тогда вычислитель может проверять этот код и организовывать переход на signal-error. Найдите в вычислителе все места, где нужно провести подобные изменения, и исправьте их. (Потребуется много работы.)",
        '3' =>
        "б. Значительно тяжелее проблема, которую представляют ошибки, возникающие в элементарных процедурах, например, попытки поделить на ноль или взять car символа. В профессионально написанной системе высокого качества всякий вызов примитива проверяется на безопасность внутри процедуры-примитива. " .
        "Например, при всяком вызове car требуется проверить, что аргумент — пара. Если аргумент не является парой, вызов вернет особый код ошибки, который вычислитель может проверить и сообщить об ошибке. " .
        "В нашем имитаторе регистровых машин этого можно было бы добиться, если бы мы проверяли в каждой элементарной процедуре правильность аргументов и при необходимости возвращали соответствующий код. В таком случае код primitive-apply мог бы проверять этот код и, если надо, переходить на signal-error. Постройте такую структуру и заставьте ее работать. (Это большой проект.)",
    ],
];
