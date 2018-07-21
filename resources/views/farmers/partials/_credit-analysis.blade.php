<div class="tab-pane" id="messages-b1">
    <div class="row">
        <div class="col-md-12">
            <h4>Loan/ Input Analysis</h4>
            <table class="table table-sm table-striped"">
            <tbody>

            @foreach([
                'ext_data_credit_history' => 'Credit history',
                'ext_data_cur_obligation_status' => 'Current obligation status',
                'ext_data_cur_utilization_rate' => 'Credit utilization rate',
                'int_data_customer_type' => 'Customer type',
                'int_data_num_of_loan_counts' => 'Number of loan counts',
                'int_data_promptness_in_repayment' => 'Promptness in payment',
            ] as $field => $name)
                <tr>
                    <td>{{ $name }}</td>
                    <td>{{ $farmer->$field }}</td>
                    <td>{{ $creditScore->get($field, $farmer->$field) }}</td>
                </tr>
            @endforeach
            <tr>
                <th>Bank statement analysis</th><th></th><th></th>
            </tr>
            @foreach([
                'bank_statement_analysis_inflow_outflow' => 'Total outflow/total inflow ratio',
                'bank_statement_closing_balance' => 'Closing balance',
                'bank_statement_avg_inflow_per_period' => 'Average inflow (Monthly)',
            ] as $field => $name)
                <tr>
                    <td>{{ $name }}</td>
                    <td>{{ $farmer->$field }}</td>
                    <td>{{ $creditScore->get($field, $farmer->$field) }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h4>Storage Analysis</h4>
            <table class="table table-sm table-striped">
                <tbody>

                @foreach([
                    'freq_of_storage' => 'Frequency of storage',
                    'curr_val_storage' => 'Current value of storage',
                    'cum_storage_val' => 'Cumulative storage Value',
                    'storage_trend_analysis' => 'Storage trend direction',
                ] as $field => $name)
                    <tr>
                        <td>{{ $name }}</td>
                        <td>{{ $farmer->$field }}</td>
                        <td>{{ $creditScore->get($field, $farmer->$field) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>Sales Transaction Analysis</h4>
            <table class="table table-sm table-striped"">
            <tbody>

            @foreach([
                'sales_trans_analysis_count' => 'Total sales count',
                'avg_sales_value_trans' => 'Avg. sale value',
                'cum_sales_value' => 'Cumulative sales value',
                'trend' => 'Sales trend direction',
            ] as $field => $name)
                <tr>
                    <td>{{ $name }}</td>
                    <td>{{ $farmer->$field }}</td>
                    <td>{{ $creditScore->get($field, $farmer->$field) }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>