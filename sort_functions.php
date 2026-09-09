<?php

function shellSort($arr) {
    $n = count($arr);
    for ($gap = floor($n / 2); $gap > 0; $gap = floor($gap / 2)) {
        for ($i = $gap; $i < $n; $i++) {
            $temp = $arr[$i];
            $j = $i;
            while ($j >= $gap && $arr[$j - $gap] > $temp) {
                $arr[$j] = $arr[$j - $gap];
                $j -= $gap;
            }
            $arr[$j] = $temp;
        }
    }
    return $arr;
}

function parseArray($str) {
    $parts = explode(',', $str);
    $result = [];
    foreach ($parts as $p) {
        $result[] = (int)trim($p);
    }
    return $result;
}

function formatArray($arr) {
    return implode(', ', $arr);
}

?>