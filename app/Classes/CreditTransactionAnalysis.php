<?php

namespace App\Classes;

class CreditTransactionAnalysis {

    use TraitAnalysis;

    function storageAnalysis()
    {
        $fields = [
            'freq_of_storage',
            'curr_val_storage',
            'cum_storage_val',
            'storage_trend_analysis'
        ];

       return $this->getScores($fields)->sum();
    }

    function SalesTransactionAnalysis()
    {
        $fields = [
            'sales_trans_analysis_count',
            'avg_sales_value_trans',
            'cum_sales_value',
            'trend'
        ];

        return $this->getScores($fields)->sum();
    }
}