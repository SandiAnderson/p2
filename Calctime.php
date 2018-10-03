<?php
/**
 * Created by PhpStorm.
 * User: sandianderson
 * Date: 9/29/18
 * Time: 10:03 AM
 */

namespace RaceCalc;


class Calctime
{
    #Properties
    private $minutes;
    private $seconds;
    private $distance;
    private $elevation;
    private $training;

    public $time;

    #Methods
    public function __construct(int $minutes, int $seconds, string $distance, string $training, string $elevation)
    {
        #get the user information
        $this->minutes = $minutes;
        $this->seconds = $seconds;
        $this->distance = $distance;
        $this->training = $training;
        $this->elevation = $elevation;

    }

    public function findTime()
    {
        #convert total time to seconds
        $s = (int)$this->minutes * 60;
        $t = $s + (int)$this->seconds;

        #get the total time based on current pace
        if ($this->distance == 'fivek') {
            $d = '3.2';
        } elseif ($this->distance == 'half') {
            $d = '13.2';
        } elseif ($this->distance == 'full') {
            $d = '26.2';
        }
        #total time in seconds/60 for total minutes
        $time = ($t * (float)$d) / 60;

        # now add a factor if there is elevation
        if ($this->elevation == 'hill') {
            $e = '.25';
        } elseif ($this->elevation == 'elevate') {
            $e = '.35';
        } else {
            $e = '0';
        }
        #add multiplyer for the elevation

        $time = $time + $time * $e;

        #now for the training
        if ($this->training == 'yes') {
            $time = $time - time * (.25);
        }
        return $time;

    }


}