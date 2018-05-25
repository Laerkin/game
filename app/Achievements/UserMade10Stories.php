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


    public function whenProgress($progress)
    {
        echo " <script> alert(
                'Super ! Vous avezfait une histoire ! encore quelques une pour le trophé'
            );</script>";
    }

    public function whenUnlocked($progress)
    {
        echo " <script> swal({
                title: 'Awesome !',
                text: 'Vous avez débloquer le trophé {!! Session::get('achievement') !!}',
                type: 'success'
            });</script>";
    }
}