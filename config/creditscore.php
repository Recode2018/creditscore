<?php

return [
    'freq_of_storage' => [
        'daily' => 4.30,
        'weekly' => 3.25,
        'monthly' => 2.21,
        'quarterly' => 1.39,
        'undetermined' => 0.46
    ],
    'curr_val_storage' => [
        'less than 50,000' => 2.57,
        '50,001-100,000' => 5.56,
        '100,001-200,000' => 7.44,
        'above 200,000' => 10.01
    ],
    'cum_storage_val' => [
        'less than 100,000' => 0.79,
        '100,000-200,000' => 1.75,
        '200,001-300,000' => 2.30,
        'above 300,000' => 3.10
    ],
    'storage_trend_analysis' => [
        'general increase' => 16.20,
        'general decrease' => -0.79,
        'static' => 0.48
    ],
    'sales_trans_analysis_count' => [
        'less than 2' => 0.31,
        '3-5 counts' => 1.68,
        '6-10 counts' => 6.11,
        '11+' => 7.18
    ],
    'avg_sales_value_trans' => [
        'less than 50,000' => 4.35,
        '50,001-100,000' => 9.56,
        '100,001-200,000' => 12.61,
        '200,000+' => 16.96
    ],
    'cum_sales_value' => [
        'less than 100,000' => 3.06,
        '100,000-200,000' => 6.72,
        '200,001-300,000' => 8.86,
        'above 300,000' => 11.91
    ],
    'trend' => [
        'general increase' => 28.76,
        'general decrease' => -1.41,
        'static' => 0.85
    ],
    'ext_data_credit_history' => [
        0 => 7.69,
        1 => 1.05
    ],
    'ext_data_cur_obligation_status' => [
        'performing' => 13.99,
        'non performing' => -10.26,
        'closed' => 19.58
    ],
    'ext_data_cur_utilization_rate' => [
        'less than 30%' => 71.86,
        '31-45%' => 4.72,
        '46-55%' => 1.05,
        '56-75%' => -7.34,
        '75%+' => -17.83
    ],
    'int_data_customer_type' => [
        'new' => 1.05,
        'existing' => 7.69
    ],
    'int_data_num_of_loan_counts' => [
        'less than 2' => 6.03,
        '3-5 counts' => 9.18,
        '6+' => 11.01
    ],
    'int_data_promptness_in_repayment' => [
        'within tolerable period' => 575.52,
        '31-59 days past due' => -75.33,
        '60-89 days past due' => -101.35,
        '90 days past due' => -127.37,
        '91+' => -134.22
    ],
    'bank_statement_analysis_inflow_outflow' => [
        '1:1.5' => 1.75,
        '1:1.2' => 1.05,
        '1:1' => 0.70,
        '2:1' => -1.05
    ],
    'bank_statement_closing_balance' => [
        'less than 100,000' => 0.70,
        '100,001-200,000' => 1.40,
        '200,001-300,000' => 1.75,
        '300,001-400,000' => 2.45,
        '400,000+' => 3.50
    ],
    'bank_statement_avg_inflow_per_period' => [
        'less than 50,000' => 0.70,
        '50,001-70,000' => 2.10,
        '70,001-100,000' => 4.20,
        '100,001-150,000' => 6.99,
        '150,000+' => 8.74
    ],
    'no_of_yrs_in_farming' => [
        'less than 1 year' => 3.20,
        '1-3years' => 13.60,
        '3+-5years' => 27.20,
        '5years+' => 36.00
    ],
    'size_of_farm' => [
        'less than 231 acres' => 2.69,
        '231 acres' => 8.74,
        '1421 acres' => 13.44,
        '2086 acres' => 17.47,
        '2086 acres+' => 38.30
    ],
    'farm_mechanization' => [
        0 => 5.70,
        1 => 0.70
    ],
    'farm_mechanization'    => [
        0 => 1,
        1 => 10,
    ],
    'soil_type' => [
        'appropriate' => 12.00,
        'inappropriate' => -1.60,
        'fairly appropriate' => 5.60
    ],
    'crop_rotation' => [
        0 => 10.11,
        1 => 2.69
    ],
    'farming_type' => [
        'mixed' => 3,
        'intensive' => 1,
        'extensive' => 3,
        'nomadic' => 1,
        'commercial' => 3,
        'pastoral' => 1,
        'subsistence' => 1
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
        'uneducated' => 1,
        'secondary school' => 1,
        'bachelor\'s degree' => 1,
        'msc' => 1,
        'phd' => 1
    ],
    'mobility_type' => [
        'None' => 1,
        'Bicycle' => 1,
        'Motorbike' => 1,
        'Car' => 1,
        'Truck' => 1
    ]
];