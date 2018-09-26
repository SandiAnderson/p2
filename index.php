<?php
/**
 * Created by PhpStorm.
 * User: sandianderson
 * Date: 9/23/18
 * Time: 3:42 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Running - Race Time Calculator</title>
    <link rel="stylesheet" href="css/p2.css">
</head>
<body>
<h1>Running - Race Time Caluclator</h1>
<p>Use this calculator to estimate your anticipated race finish time.</p>
<div id="calcForm">
    <form method="get" action="calculate.php">
        <p><label>Current Pace:
                <input type="text" name="pace" size="3">
                min/mile
            </label></p>
        <p><label>Distance
                <select name="distance">
                    <option value="5k">5K</option>
                    <option value="half">Half Marathon</option>
                    <option value="full">Half Marathon</option>
                </select>
            </label></p>
        <p><label>Type of Elevation
                <select name="elevation">
                    <option value="flat">Fast and Flat</option>
                    <option value="hill">Some Hills</option>
                    <option value="elevate">High Elevation</option>
                </select>
            </label></p>
        <p><label>Are you training?
                <input type="checkbox" id="training" value="no"> Yes
                <input type="checkbox" id="training" value="no"> No
            </label></p>
        <input type="submit" value="Calculate">
    </form>

</div>
</body>
</html>