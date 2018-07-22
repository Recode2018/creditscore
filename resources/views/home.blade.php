@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-box d-flex">
                    <select class="form-control">
                        <option>Account Number</option>
                        <option>Phone Number</option>
                        <option>BVN</option>
                    </select>

                    <input type="text" class="form-control" placeholder="Enter Account No or Phone no or BVN...">

                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div id="chart_div"></div>
                    </div>
                </div><br/>
                <div class="col-md-12">
                    <div class="card">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>Credit Score</th>
                                <th>Q1</th>
                                <th>Q2</th>
                                <th>Q3</th>
                                <th>Q4</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>300-499</td>
                                <td>896</td>
                                <td>901</td>
                                <td>883</td>
                                <td>845</td>
                            </tr>
                            <tr>
                                <td>500-549</td>
                                <td>789</td>
                                <td>884</td>
                                <td>849</td>
                                <td>729</td>
                            </tr>
                            <tr>
                                <td>550-599</td>
                                <td>810</td>
                                <td>920</td>
                                <td>650</td>
                                <td>528</td>
                            </tr>
                            <tr>
                                <td>600-649</td>
                                <td>750</td>
                                <td>710</td>
                                <td>680</td>
                                <td>700</td>
                            </tr>
                            <tr>
                                <td>700-749</td>
                                <td>321</td>
                                <td>450</td>
                                <td>380</td>
                                <td>298</td>
                            </tr>
                            <tr>
                                <td>750-799</td>
                                <td>258</td>
                                <td>341</td>
                                <td>321</td>
                                <td>451</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .no-padding-left {
            padding-left: 0;
        }
    </style>
@endsection

@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = google.visualization.arrayToDataTable([
                ['FICO', 'Q1', 'Q2', 'Q3', 'Q4'],
                ['300-499', 64, 70, 82, 80],
                ['500-549', 79, 73, 74, 81],
                ['550-599', 67, 74, 79, 68],
                ['600-649', 61, 56, 63, 79],
                ['650-699', 78, 81, 79, 64],
                ['700-749', 35, 45, 49, 25],
                ['759-799', 23, 21, 38, 31],
                ['800-850', 18, 25, 21, 14]
            ]);

            var options = {
                title: '',
                orientation: 'horizontal',
                chartArea: {width: '70%'},
                hAxis: {
                    title: 'Farmer Credit Score Distribution From Q1 - Q4',
                    minValue: 0,
                    maxValue: 100
                },
//                vAxis: {
//                    title: 'FICO'
//                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>

@endsection
