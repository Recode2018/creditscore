<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    @yield('styles')
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h2 class="text-primary">Personal Information</h2>
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

                <h2 class="text-primary">Credit/ Transaction Analysis</h2>

                @include('farmers.partials._credit-analysis')

                <h2 class="text-primary">Farm Analysis</h2>

                @include('farmers.partials._firm-analysis')

                <h2 class="text-primary">Social Analysis</h2>

                @include('farmers.partials._social-analysis')
            </div>
        </div> <!-- end col -->
    </div>
</div> <!-- container -->

<footer class="footer text-right">
    Recode 2018
</footer>


<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
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
        options: {responsive:true, animation: false}
    });

    window.onload = function () {
        print();
    }
</script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/plugins/jquery-knob/jquery.knob.js"></script>
<!-- App js -->
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>
</body>
</html>
