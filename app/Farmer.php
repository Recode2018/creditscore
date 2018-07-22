<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $guarded = [1];

    static function riskAnalysis($metric)
    {
        switch ($metric){
            case $metric > 600:
                return 0;
                break;
            case ($metric < 600) && ($metric > 450):
                return 1;
                break;
            case ($metric < 450) && ($metric > 300):
                return 2;
                break;
            case ($metric < 300):
                return 3;
            default:
                return 3;
                break;
        }
    }
}