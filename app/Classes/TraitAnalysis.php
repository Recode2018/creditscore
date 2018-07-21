<?php

namespace App\Classes;

trait TraitAnalysis {

    function __construct($data)
    {
        $this->data = $data;
        $this->scores = collect(config()->get('creditscore'));
    }

    public function getScores(array $fields)
    {
        return collect($this->data->only($fields))->map(function ($value,$field){
            return $this->scores->get($field)[$value];
        });
    }
}