<?php

namespace Gstt\Achievements;

use App\Achievements\UserMade1Stories;

trait Achiever
{
    use EntityRelationsAchievements, RoutesAchievements;

    public function addProgress () {
        $user = User::Auth();
        $user->addProgress(new UserMade1Stories);
    }


}