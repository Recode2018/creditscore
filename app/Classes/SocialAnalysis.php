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
            'mobility_type',
            'coop_membership_size'
        ];

        return $this->getScores($fields)->sum();
    }
}