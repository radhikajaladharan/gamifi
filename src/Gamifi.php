<?php

namespace Gamifi;

use Gamifi\Models\GamePoint;

class Gamifi
{
    public function getAllGamePoints()
    {
        return GamePoint::all(); 
    }
}