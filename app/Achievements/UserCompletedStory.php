<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserCompletedStory extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Aventure terminée";

    /*
     * A small description for the achievement
     */
    public $description = "Yeah ! vous avez terminé votre première aventure !!";
}

class UserMade1Stories extends Achievement
{
    // Achiev' name
    public $name = "1 Aventure terminée";

    // Achiev description

    public $description = 'WoW !1 aventures ! GG !';

    //montant de pts requis pour l'achiev

    public $points = 1;


}