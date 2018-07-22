@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-3 pull-left">
                <a href="{{ route('farmers.print', $farmer) }}"
                   class="btn btn-custom waves-effect waves-light mb-4" target="_blank">
                    <i class="mdi mdi-printer"></i> Print Report
                </a>
            </div><!-- end col -->
            <div class="col-sm-3 pull-right">
                <a href="{{ route('farmers.print', $farmer) }}"
                   class="btn btn-custom waves-effect waves-light mb-4 pull-right" target="_blank">
                    <i class="mdi mdi-pencil"></i> Update Information
                </a>
            </div><!-- end col -->
        </div>
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
                            <div class="col-md-5 table-striped">

                                <table class="table table-sm">
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
                                    <tr>
                                        <td>Phone:</td>
                                        <td>{{ is_null($farmer->phone) ? 'Not Available' : $farmer->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location Of Farm:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->location_of_farm) ?
                                        'Not Available' :
                                        $farmer->location_of_farm }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Years Of Experience:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->no_of_yrs_in_farming) ?
                                        'Not Available' :
                                        $farmer->no_of_yrs_in_farming }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->age) ?
                                        'Not Available' :
                                        $farmer->age }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cooperative Membership Size:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->coop_membership_size) ?
                                        'Not Available' :
                                        $farmer->coop_membership_size }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Farming Type:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->farming_type) ?
                                        'Not Available' :
                                        $farmer->farming_type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Farming Trend:</td>
                                        <td class="text-capitalize">
                                            {{ is_null($farmer->trend) ?
                                        'Not Available' :
                                        $farmer->trend }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md offset-md-1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <canvas id="pie" height="350" class="mt-4"></canvas>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex">
                                            <h4 class="my-0 pr-2 text-primary">{{ $creditScore->transactionPercent() }}%</h4>
                                            <p>
                                                <strong>Credit/ Transaction Analysis:</strong>
                                                <small>
                                                    Analyses the farmer's historic transactions data.
                                                    This includes storage, sales, loans among others
                                                </small>
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <h4 class="my-0 pr-2 text-primary">{{ $creditScore->farmPercent() }}%</h4>
                                            <p>
                                               <strong>Business/ Farm Analysis:</strong>
                                                <small>
                                                    All the analysis of farm operations using available
                                                    farm credit data
                                                </small>
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <h4 class="my-0 pr-2 text-primary">{{ $creditScore->socialPercent() }}%</h4>
                                            <p>
                                                <strong>Social Analysis:</strong>
                                                <small>
                                                    Farmer's social data is analysed.
                                                    Data such as age, accommodation type among others.
                                                </small>
                                            </p>
                                        </div>

                                        <h4 class="text-primary pt-md-3 text-center">
                                            Credit Score: {{ $creditScore->metrics() }}
                                        </h4>
                                    </div>
                                </div>

                                <div class="d-flex">

                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('farmers.partials._credit-analysis')
                    @include('farmers.partials._firm-analysis')
                    @include('farmers.partials._social-analysis')
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- Chart JS -->
    <script src="/plugins/chart.js/chart.bundle.js"></script>
    <script type="text/javascript">
        let transaction = {{ $creditScore->getTransactionAnalysis() }},
            farm    = {{ $creditScore->getFarmAnalysis() }},
            social  = {{ $creditScore->getSocialAnalysis() }};

        let sum = transaction + farm + social;

        let data = {
            datasets: [{
                data: [
                    {{ $creditScore->transactionPercent() }},
                    {{ $creditScore->farmPercent() }},
                    {{ $creditScore->socialPercent() }},
                ],
                backgroundColor: [
                    '#000',
                    '#e04032',
                    '#71f355',
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Transaction Analysis',
                'Farm Analysis',
                'Social Analysis'
            ],
        };
        let myPieChart = new Chart($('#pie'),{
            type: 'pie',
            data: data,
            options: {responsive:true}
        });
    </script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="/plugins/jquery-knob/jquery.knob.js"></script>
@endsection