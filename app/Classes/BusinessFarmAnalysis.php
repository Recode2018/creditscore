<?php
/**
 * Created by PhpStorm.
 * User: iemarjay
 * Date: 7/21/18
 * Time: 1:32 PM
 */

namespace App\Classes;


class BusinessFarmAnalysis
{
    use TraitAnalysis;

    public function get()
    {
        return $this->getScores([
            'no_of_yrs_in_farming',
            'size_of_farm',
            'farm_mechanization',
            'soil_type',
            'crop_rotation',
            'farming_type',
            'irrigation_method',
            'no_of_employees'
        ])->sum();
    }

}