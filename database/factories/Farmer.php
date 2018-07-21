<?php

use Faker\Generator as Faker;

$factory->define(App\Farmer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'account' => $faker->numberBetween(99999999999,10000000000),
        'bvn' => $faker->numberBetween(9999999999999,1000000000000),
        'freq_of_storage' => $faker->randomElement(['daily','weekly','monthly','quarterly']),
        'curr_val_storage' => $faker->randomElement(['less than 50,000', '50,001-100,000', '100,001-200,000', 'above 200,000']),
        'cum_storage_val' => $faker->randomElement(['less than 100,000', '100,000-200,000', '200,001-300,000', 'above 300,000']),
        'storage_trend_analysis' => $faker->randomElement(['general increase', 'general decrease', 'static']),
        'sales_trans_analysis_count' => $faker->randomElement(['less than 2', '3-5 counts', '6-10 counts', '11+']),
        'avg_sales_value_trans' => $faker->randomElement(['less than 50,000', '50,001-100,000', '100,001-200,000', '200,000+']),
        'cum_sales_value' => $faker->randomElement(['less than 100,000', '100,000-200,000', '200,001-300,000', 'above 300,000']),
        'trend' => $faker->randomElement(['general increase', 'general decrease', 'static']),
        'ext_data_credit_history' => $faker->boolean,
        'ext_data_cur_obligation_status' => $faker->randomElement(['performing', 'non performing', 'closed']),
        'ext_data_cur_utilization_rate' => $faker->randomElement(['less than 30%', '31-45%', '46-55%', '56-75%', '75%+']),
        'int_data_customer_type' => $faker->randomElement(['new','existing']),
        'int_data_num_of_loan_counts' => $faker->randomElement(['less than 2', '3-5 counts', '6+']),
        'int_data_promptness_in_repayment' => $faker->randomElement([
            'within tolerable period',
            '31 days past due',
            '60 days past due',
            '90 days past due',
            '91+']),
        'bank_statement_analysis_inflow_outflow' => $faker->randomElement(['1:1.5', '1:1.2', '1:1', '2:1']),
        'bank_statement_closing_balance' => $faker->randomElement([
            'less than 100,000',
            '100,001-200,000',
            '200,001-300,000',
            '300,001-400,000',
            '400,000+'
        ]),
        'bank_statement_avg_inflow_per_period' => $faker->randomElement([
            'less than 50,000',
            '50,001-70,000',
            '70,001-100,000',
            '100,001-150,000',
            '150,000+'
        ]),
        'no_of_yrs_in_farming' => $faker->randomElement(['less than 1 year', '1-3years', '3+-5years', '5years+']),
        'size_of_farm' => $faker->randomElement(['less than 231 acres', '231 acres', '1421 acres', '2086 acres', '2086 acres+']),
        'farm_mechanization' => $faker->boolean,
        'soil_type' => $faker->randomElement(['appropriate', 'inappropriate', 'fairly appropriate']),
        'crop_rotation' => $faker->boolean,
        'farming_type' => $faker->randomElement([
            'Mixed', 'Intensive',
            'Extensive', 'Nomadic',
            'Commercial', 'Pastoral',
            'Subsistence'
        ]),
        'irrigation_method' => $faker->randomElement(['rainfall', 'micro', 'drip', 'sprinkler', 'flood']),
        'age' => $faker->randomElement(['less than 30 years', '31-45years', '46-50 years', '51-55 years', '56+']),
        'accommodation_type' => $faker->randomElement(['rented', 'owned']),
        'no_of_dependents' => $faker->randomElement(['less than 2', '3-5', '6-10', '10+']),
        'highest_level_of_education' => $faker->randomElement([
            'Uneducated',
            'Secondary school',
            'Bachelor\'s degree',
            'MSc',
            'PhD'
        ]),
        'mobility_type' => $faker->randomElement(['None', 'Bicycle', 'Motorbike', 'Car', 'Truck'])
    ];
});