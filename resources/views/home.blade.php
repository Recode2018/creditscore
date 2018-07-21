@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-10">
                    <div class="card">
                        <div id="chart_div"></div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>Credit Score</th>
                                <th>Q1</th>
                                <th>Q2</th>
                                <th>Q3</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>300-499</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>500-549</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>550-599</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>600-649</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>700-749</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>750-799</td>
                                <td>300</td>
                                <td>300</td>
                                <td>300</td>
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

            let data = google.visualization.arrayToDataTable([
                ['FICO', 'Q1', 'Q2', 'Q3'],
                ['300-499', 5, 8, 18],
                ['500-549', 8, 11, 12],
                ['550-599', 12, 10, 8],
                ['600-649', 10, 8, 12],
                ['650-699', 6, 12, 12],
                ['700-749', 6, 12, 12],
                ['759-799', 6, 12, 12],
                ['800-850', 6, 12, 12]
            ]);

            let options = {
                title: '',
                orientation: 'horizontal',
                chartArea: {width: '60%'},
                hAxis: {
                    title: 'Credit Score Distribution',
                    minValue: 0,
                    maxValue: 25
                },
//                vAxis: {
//                    title: 'FICO'
//                }
            };

            let chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>

@endsection
