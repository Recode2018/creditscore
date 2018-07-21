<?php

namespace App\Classes;


class SocialAnalysis
{
    use TraitAnalysis;

    public function get()
    {
        $fields = [
            'age',
            'accommodation_type',
            'no_of_dependents',
            'highest_level_of_education',
            'mobility_type'
        ];

        return $this->getScores($fields)->sum();
    }
}