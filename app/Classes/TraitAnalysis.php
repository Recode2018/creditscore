<?php

namespace App\Classes;

use Illuminate\Support\Collection;

trait TraitAnalysis {

    function __construct($data)
    {
        $this->data = $data;
        $this->scores = collect(config()->get('creditscore'));
    }

    public function getScores(array $fields) :Collection
    {
        return collect($this->data->only($fields))->map(function ($value,$field){
            return $this->scores->get($field)[$value];
        });
    }
}