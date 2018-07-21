<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('account')->nullable();
            $table->string('bvn')->nullable();
            $table->string('freq_of_storage')->nullable();
            $table->string('curr_val_storage')->nullable();
            $table->string('cum_storage_val')->nullable();
            $table->string('storage_trend_analysis')->nullable();
            $table->string('sales_trans_analysis_count')->nullable();
            $table->string('avg_sales_value_trans')->nullable();
            $table->string('cum_sales_value')->nullable();
            $table->string('trend')->nullable();
            $table->string('ext_data_credit_history')->nullable();
            $table->string('ext_data_cur_obligation_status')->nullable();
            $table->string('ext_data_cur_utilization_rate')->nullable();
            $table->string('int_data_customer_type')->nullable();
            $table->string('int_data_num_of_loan_counts')->nullable();
            $table->string('int_data_promptness_in_repayment')->nullable();
            $table->string('bank_statement_analysis_inflow_outflow')->nullable();
            $table->string('bank_statement_closing_balance')->nullable();
            $table->string('bank_statement_avg_inflow_per_period')->nullable();
            $table->string('location_of_farm')->nullable();
            $table->string('no_of_yrs_in_farming')->nullable();
            $table->string('size_of_farm')->nullable();
            $table->string('farm_mechanization')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('crop_rotation')->nullable();
            $table->string('farming_type')->nullable();
            $table->string('irrigation_method')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->string('age')->nullable();
            $table->string('accommodation_type')->nullable();
            $table->string('no_of_dependents')->nullable();
            $table->string('highest_level_of_education')->nullable();
            $table->string('mobility_type')->nullable();
            $table->string('coop_membership_size')->nullable();
            $table->string('credit_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
