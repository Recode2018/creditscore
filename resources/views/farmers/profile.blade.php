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
                            <div class="col-md-5 table-striped">

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
                            <div class="col-md-7">

                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <canvas id="pie" height="350" class="mt-4"></canvas>

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
    <script src="/assets/pages/jquery.chartjs.init.js"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="/plugins/jquery-knob/jquery.knob.js"></script>
@endsection