<?php

/**
 * Считает, сколько его элементов относятся к проекту
 * @param array $array Итерируемый массив
 * @param string $project Название проекта, по которому идет счет
 * @return integer $counter Количество соответствующих элементов
 */

function countProjectElements($array, $project) {
    $counter = 0;
    foreach ($array as $element) {
        if ($element['project'] == $project) {
            $counter++;
        };
    };

    return $counter;
};