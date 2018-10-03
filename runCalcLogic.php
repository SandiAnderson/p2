<?php
/**
 * Created by PhpStorm.
 * User: sandianderson
 * Date: 9/25/18
 * Time: 5:33 PM
 */

session_start();


$stats = $_SESSION['stats'] ?? Null;
if($stats){

    $minutes = $stats['minutes'];
    $seconds = $stats['seconds'];
    $distance = $stats['distance'];
    $elevation = $stats['elevation'];
    $training = $stats['training'];
    $time = $stats['time'];
    $hasErrors = $stats['hasErrors'];
    $errors = $stats['errors'];
}

session_unset();