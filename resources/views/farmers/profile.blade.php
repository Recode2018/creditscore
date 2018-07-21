@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Export Information</a>
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
                                        <td>Name:</td><td>Alofe Olu</td>
                                    </tr>
                                    <tr>
                                        <td>Account No:</td><td>2348928934</td>
                                    </tr>
                                    <tr>
                                        <td>BVN:</td><td>2348928934</td>
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
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane" id="settings-b1">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                    <div class="tab-pane" id="socials">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
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