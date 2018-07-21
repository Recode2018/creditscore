<?php

namespace App\Classes;

use App\Farmer;

class CreditScore {

    public $farmer;

    function __construct(Farmer $farmer)
    {
        $this->farmer = $farmer;
    }

    function getTransactionAnalysis()
    {
        return (new CreditTransactionAnalysis($this->farmer))->get();
    }

    function getFarmAnalysis()
    {
        return (new BusinessFarmAnalysis($this->farmer))->get();
    }

    function getSocialAnalysis()
    {
        return (new SocialAnalysis($this->farmer))->get();
    }

    public function metrics()
    {
        return $this->getSocialAnalysis() + $this->getTransactionAnalysis()+ $this->getFarmAnalysis();
    }
}