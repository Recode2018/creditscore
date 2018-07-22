@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <a href="{{route('farmers.import')}}" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Import Farmer</a>
        </div><!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Account No</td>
                        <td>BVN</td>
                        <td>Credit Score</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($farmers as $farmer)
                    <tr>
                        <td>{{ $farmer->name }}</td>
                        <td>{{ $farmer->account }}</td>
                        <td>{{ $farmer->bvn }}</td>
                        <td>{{ (new \App\Classes\CreditScore($farmer))->metrics() }}</td>
                        <td><a href="{{ route('farmers.profile', $farmer->id) }}" class="btn btn-primary btn-sm">View Farmer</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Emmanuel John</td>
                        <td>93434567</td>
                        <td>02334567-ab</td>
                        <td>920</td>
                        <td><a href="{{ route('farmers.profile', 1) }}" class="btn btn-primary btn-sm">View Farmer</a></td>
                    </tr>
                    <tr>
                        <td>Alofe John</td>
                        <td>04298567</td>
                        <td>02134567-ab</td>
                        <td>120</td>
                        <td><a href="{{ route('farmers.create', 1) }}" class="btn btn-primary btn-sm">View Farmer</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <ul class="pagination pagination-split mt-0 pull-right">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
