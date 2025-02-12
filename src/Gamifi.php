<?php

namespace Gamifi\Gamifi;

use Gamifi\Models\GamePoint;

class Gamifi
{
    public function getAllGamePoints()
    {
        return GamePoint::all(); 
    }
}