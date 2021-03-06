<?php
/**
 * Created by PhpStorm.
 * User: sandianderson
 * Date: 9/23/18
 * Time: 3:42 PM
 */
require 'includes/helpers.php';
require 'runCalcLogic.php';

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
<p>Use this calculator to estimate your anticipated race finish time.<br>
    <span class="req">All values are required.</span></p>
<div id="calcForm">
    <form method="get" action="calculate.php">
        <p>Current Mile Pace:<br>
            <label>Minutes: <input type="text" name="minutes" size="2" value="<?= $minutes ?? '0' ?> ">
            </label>
            <label>Seconds:
                <input type="text" name="seconds" size="2" value="<?= $seconds ?? '0' ?> ">
            </label></p>
        <p><label>Distance
                <select name="distance">
                    <option value="" <?= (!isset($distance)) ? ' selected' : '' ?>>Select One</option>
                    <option value="fivek"<?= (isset($distance) && $distance == 'fivek') ? ' selected' : '' ?>>5K
                    </option>
                    <option value="half" <?= (isset($distance) && $distance == 'half') ? ' selected' : '' ?>>Half
                        Marathon
                    </option>
                    <option value="full" <?= (isset($distance) && $distance == 'full') ? ' selected' : '' ?>>Marathon
                    </option>
                </select>
            </label></p>
        <p><label>Type of Elevation
                <select name="elevation">
                    <option value="" <?= (!isset($elevation)) ? ' selected' : '' ?>>Select One</option>
                    <option value="flat" <?= (isset($elevation) && $elevation == 'flat') ? ' selected' : '' ?>>Fast and
                        Flat
                    </option>
                    <option value="hill" <?= (isset($elevation) && $elevation == 'hill') ? ' selected' : '' ?>>Some
                        Hills
                    </option>
                    <option value="elevate" <?= (isset($elevation) && $elevation == 'elevate') ? ' selected' : '' ?>>
                        High Elevation
                    </option>
                </select>
            </label></p>
        <p>Are you training?
            <label for="yes"><input type="radio" name="training" id="yes"
                                    value="yes" <?= (isset($training) && $training == 'yes') ? ' checked' : '' ?>> Yes
            </label>
            <label for="no"><input type="radio" name="training" id="no"
                                   value="no" <?= (isset($training) && $training == 'no') ? ' checked' : '' ?> > No
            </label></p>
        <input type="submit" value="Calculate">
    </form>
<hr>
    <?php if (isset($time) && $time > 0) : ?>
        <div class='time'>Your anticipated completion time is <?= $time ?> minutes</div>
    <?php endif; ?>

    <?php if (isset($errors) && $errors) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class='error'><?= $error ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>
</body>
</html>