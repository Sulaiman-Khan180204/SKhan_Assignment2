<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [

        'name',
        'position',
        'number',
        'nationality',
        'appearances',
        'goals'
    ];

    public function getGoalRatio()
    {
        if ($this->appearances == 0) return 0;

        return round($this->goals / $this->appearances, 2);
    }
}
