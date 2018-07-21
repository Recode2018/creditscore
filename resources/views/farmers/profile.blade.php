@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Export Analysis</a>
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <ul class="nav nav-tabs tabs-bordered">
                    <li class="nav-item">
                        <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            <i class="fi-head mr-2"></i> Personal Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="fi-mail mr-2"></i> Credit/ Transaction Analysis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="fi-cog mr-2"></i> Business/ Farm Analysis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#socials" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <i class="fi-cog mr-2"></i> Social Analysis
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="profile-b1">
                        <div class="row">
                            <div class="col-md-5">

                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Name:</td><td>{{ $farmer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account No:</td><td>{{ $farmer->account }}</td>
                                    </tr>
                                    <tr>
                                        <td>BVN:</td><td>{{ $farmer->bvn }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-7">

                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <canvas id="pie" height="350" class="mt-4"></canvas>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages-b1">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Loan/ Input Analysis</h4>
                                <table class="table table-sm">
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

                            <div class="col-md-5">
                                <h4>Storage Analysis</h4>
                                <table class="table table-sm">
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

                                <h4>Sales Transaction Analysis</h4>
                                <table class="table table-sm">
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
                    <div class="tab-pane" id="settings-b1">
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-sm">
                                    <tbody>

                                    @foreach([
                                        'location_of_farm' => 'Location of Farm',
                                        'no_of_yrs_in_farming' => 'Number of years in farming',
                                        'size_of_farm' => 'Size of farm',
                                        'farm_mechanization' => 'Farm mechanization',
                                        'soil_type' => 'Soil type',
                                        'crop_rotation' => 'Crop rotation',
                                        'farming_type' => 'Farming type',
                                        'irrigation_method' => 'Irrigation method',
                                        'no_of_employees' => 'Number of employees',
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
                    <div class="tab-pane" id="socials">
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-sm">
                                    <tbody>

                                    @foreach([
                                        'age' => 'Age',
                                        'accommodation_type' => 'Accommodation type',
                                        'no_of_dependents' => 'Number of dependents',
                                        'highest_level_of_education' => 'Highest level of education',
                                        'mobility_type' => 'Mobility type',
                                        'coop_membership_size' => 'Cooperative membership size',
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
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- Chart JS -->
    <script src="/plugins/chart.js/chart.bundle.js"></script>
    <script src="/assets/pages/jquery.chartjs.init.js"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="/plugins/jquery-knob/jquery.knob.js"></script>
@endsection