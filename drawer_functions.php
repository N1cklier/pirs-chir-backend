<?php

function getShape($num) {
    $code = $num & 3;
    if ($code == 0) return 'circle';
    if ($code == 1) return 'square';
    if ($code == 2) return 'triangle';
    return 'ellipse';
}

function getColor($num) {
    $code = ($num >> 2) & 3;
    if ($code == 0) return 'red';
    if ($code == 1) return 'blue';
    if ($code == 2) return 'green';
    return 'orange';
}

function getSize($num) {
    $code = ($num >> 4) & 3;
    if ($code == 0) return 40;
    if ($code == 1) return 70;
    return 100;
}

function drawSVG($num) {
    $shape = getShape($num);
    $color = getColor($num);
    $size = getSize($num);
    $cx = 150;
    $cy = 150;
    
    $svg = '<svg width="300" height="300" xmlns="http://www.w3.org/2000/svg">';
    $svg .= '<rect width="300" height="300" fill="white"/>';
    
    if ($shape == 'circle') {
        $svg .= "<circle cx='$cx' cy='$cy' r='$size' fill='$color'/>";
    } elseif ($shape == 'square') {
        $half = $size / 2;
        $svg .= "<rect x='" . ($cx - $half) . "' y='" . ($cy - $half) . "' width='$size' height='$size' fill='$color'/>";
    } elseif ($shape == 'triangle') {
        $svg .= "<polygon points='$cx," . ($cy - $size) . " " . ($cx + $size) . "," . ($cy + $size) . " " . ($cx - $size) . "," . ($cy + $size) . "' fill='$color'/>";
    } else {
        $svg .= "<ellipse cx='$cx' cy='$cy' rx='$size' ry='" . ($size/2) . "' fill='$color'/>";
    }
    
    $svg .= '</svg>';
    return $svg;
}

?>