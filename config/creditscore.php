<?php

return [
    'freq_of_storage' => [
        'daily' => 1,
        'weekly' => 1,
        'monthly' => 1,
        'quarterly' => 1
    ],
    'curr_val_storage' => [
        'less than 50,000' => 1,
        '50,001-100,000' => 1,
        '100,001-200,000' => 1,
        'above 200,000' => 1
    ],
    'cum_storage_val' => [
        'less than 100,000' => 1,
        '100,000-200,000' => 1,
        '200,001-300,000' => 1,
        'above 300,000' => 1
    ],
    'storage_trend_analysis' => [
        'general increase' => 1,
        'general decrease' => 1,
        'static' => 1
    ],
    'sales_trans_analysis_count' => [
        'less than 2' => 1,
        '3-5 counts' => 1,
        '6-10 counts' => 1,
        '11+' => 1
    ],
    'avg_sales_value_trans' => [
        'less than 50,000' => 1,
        '50,001-100,000' => 1,
        '100,001-200,000' => 1,
        '200,000+' => 1
    ],
    'cum_sales_value' => [
        'less than 100,000' => 1,
        '100,000-200,000' => 1,
        '200,001-300,000' => 1,
        'above 300,000' => 1
    ],
    'trend' => [
        'general increase' => 1,
        'general decrease' => 1,
        'static' => 1
    ],
    'ext_data_credit_history' => [
        0 => 1,
        1 => 1
    ],
    'ext_data_cur_obligation_status' => [
        'performing' => 1,
        'non performing' => 1,
        'closed' => 1
    ],
    'ext_data_cur_utilization_rate' => [
        'less than 30%' => 1,
        '31-45%' => 1,
        '46-55%' => 1,
        '56-75%' => 1,
        '75%+' => 1
    ],
    'int_data_customer_type' => [
        'new' => 1,
        'existing' => 1
    ],
    'int_data_num_of_loan_counts' => [
        'less than 2' => 1,
        '3-5 counts' => 1,
        '6+' => 2,
    ],
    'int_data_promptness_in_repayment' => [
        'within tolerable period' => 1,
        '31-59 days past due' => 1,
        '60-89 days past due' => 1,
        '90 days past due' => 1,
        '91+' => 1
    ],
    'bank_statement_analysis_inflow_outflow' => [
        '1:1.5' => 1,
        '1:1.2' => 1,
        '1:1' => 1,
        '2:1' => 1
    ],
    'bank_statement_closing_balance' => [
        'less than 100,000' => 1,
        '100,001-200,000' => 1,
        '200,001-300,000' => 1,
        '300,001-400,000' => 1,
        '400,000+' => 1
    ],
    'bank_statement_avg_inflow_per_period' => [
        'less than 50,000' => 1,
        '50,001-70,000' => 1,
        '70,001-100,000' => 1,
        '100,001-150,000' => 1,
        '150,000+' => 1
    ],
    'no_of_yrs_in_farming' => [
        'less than 1 year' => 1,
        '1-3years' => 1,
        '3+-5years' => 1,
        '5years+' => 1
    ],
    'size_of_farm' => [
        'less than 231 acres' => 1,
        '231 acres' => 1,
        '1421 acres' => 1,
        '2086 acres' => 1,
        '2086 acres+' => 1
    ],
    'farm_mechanization'    => [
        0 => 1,
        1 => 10,
    ],
    'soil_type' => [
        'appropriate' => 1,
        'inappropriate' => 1,
        'fairly appropriate' => 1
    ],
    'crop_rotation' => [
        0 => 0,
        1 => 2,
    ],
    'farming_type' => [
        'Mixed' => 2, 'Intensive' => 1,
        'Extensive' => 3, 'Nomadic' => 1,
        'Commercial' => 4, 'Pastoral' => 1,
        'Subsistence' => 1
    ],
    'irrigation_method' => [
        'rainfall' => 1,
        'micro' => 1,
        'drip' => 1,
        'sprinkler' => 1,
        'flood' => 1
    ],
    'no_of_employees' => [
        'less than 5' => 2,
        '6-12 employees' => 3,
        '13+' => 2
    ],
    'age' => [
        'less than 30 years' => 1,
        '31-45years' => 1,
        '46-50 years' => 1,
        '51-55 years' => 1,
        '56+' => 1
    ],
    'accommodation_type' => [
        'rented' => 1,
        'owned' => 1
    ],
    'no_of_dependents' => [
        'less than 2' => 1,
        '3-5' => 1,
        '6-10' => 1,
        '10+' => 1
    ],
    'highest_level_of_education' => [
        'Uneducated' => 1,
        'Secondary school' => 1,
        'Bachelor\'s degree' => 1,
        'MSc' => 1,
        'PhD' => 1
    ],
    'mobility_type' => [
        'None' => 1,
        'Bicycle' => 1,
        'Motorbike' => 1,
        'Car' => 1,
        'Truck' => 1
    ]
];