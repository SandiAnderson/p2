<?php

require 'Form.php';
require 'Calctime.php';

use DWA\Form;
use RaceCalc\Calctime;

session_start();

$stats = $_GET;
$form = new Form($stats);

$errors = $form->validate([
    'minutes' => 'required|numeric|min:0|max:60',
    'seconds' => 'required|numeric|min:0|max:60',
    'distance' => 'required',
    'elevation' => 'required',
    'training' => 'required',
]);
$hasErrors = $form->hasErrors;

$minutes = $form->get('minutes');
$seconds = $form->get('seconds');
$distance = $form->get('distance');
$elevation = $form->get('elevation');
$training = $form->get('training');
$time = 0;

if (!$hasErrors) {

    $calc = new Calctime($minutes, $seconds, $distance, $training, $elevation);
    $time = $calc->findTime();
}
$_SESSION['stats'] = [
    'minutes' => $minutes,
    'seconds' => $seconds,
    'distance' => $distance,
    'elevation' => $elevation,
    'training' => $training,
    'time' => $time,
    'errors' => $errors,
    'hasErrors' => $hasErrors,
];

header('Location: index.php');