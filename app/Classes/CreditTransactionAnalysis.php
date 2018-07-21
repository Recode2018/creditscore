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

    function salesTransactionAnalysis()
    {
        $fields = [
            'sales_trans_analysis_count',
            'avg_sales_value_trans',
            'cum_sales_value',
            'trend'
        ];

        return $this->getScores($fields)->sum();
    }

    function loanTransactionAnalysis()
    {
        $fields = [
            'ext_data_credit_history',
            'ext_data_cur_obligation_status',
            'ext_data_cur_utilization_rate',
            'int_data_customer_type',
            'int_data_num_of_loan_counts',
            'int_data_promptness_in_repayment',
            'bank_statement_analysis_inflow_outflow',
            'bank_statement_closing_balance',
            'bank_statement_avg_inflow_per_period'
        ];

        return $this->getScores($fields)->sum();
    }

    function farmAnalysis()
    {
        $fields = [
            'ext_data_credit_history',
            'ext_data_cur_obligation_status',
            'ext_data_cur_utilization_rate',
            'int_data_customer_type',
            'int_data_num_of_loan_counts',
            'int_data_promptness_in_repayment',
            'bank_statement_analysis_inflow_outflow',
            'bank_statement_closing_balance',
            'bank_statement_avg_inflow_per_period'
        ];

        return $this->getScores($fields)->sum();
    }

    public function get()
    {
        return $this->storageAnalysis() +
            $this->salesTransactionAnalysis() +
            $this->farmAnalysis() +
            $this->loanTransactionAnalysis();
    }
}