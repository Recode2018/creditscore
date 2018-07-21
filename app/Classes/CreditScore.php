<?php

namespace App\Classes;

use App\Farmer;
use Illuminate\Support\Collection;

class CreditScore {

    public $farmer;
    public $scores;

    function __construct(Farmer $farmer)
    {
        $this->farmer = $farmer;
        $this->scores = collect(config()->get('creditscore'));
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

    public function get($field, $value)
    {
        return $this->scores->get($field)[$value];
    }

    public function transactionPercent()
    {
        return floor($this->getTransactionAnalysis() / 470 * 100);
    }

    public function farmPercent()
    {
        return floor($this->getFarmAnalysis() / 320 * 100);
    }

    public function socialPercent()
    {
        return floor($this->getSocialAnalysis() / 210 * 100);
    }

    public function metrics()
    {
        return $this->getSocialAnalysis() + $this->getTransactionAnalysis()+ $this->getFarmAnalysis();
    }
}