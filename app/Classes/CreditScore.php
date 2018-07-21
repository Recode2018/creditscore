<?php

namespace App\Classes;

use App\Farmer;

class CreditScore {

    public $farmer;

    function __construct(Farmer $farmer)
    {
        $this->farmer = $farmer;
    }

    public function metrics()
    {

    }
}