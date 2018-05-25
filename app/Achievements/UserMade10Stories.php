<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserMade10Stories extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "10 Posts Created";

    /*
     * A small description for the achievement
     */
    public $description = "Wow! vous avez créer 10 Aventures!";

    /*
     * The amount of "points" this user need to obtain in order to complete this achievement
     */
    public $points = 10;
}