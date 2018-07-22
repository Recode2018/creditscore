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

            @if(session()->has('info'))
            <div class="alert alert-primary" role="alert">
                {{session('info')}}
            </div>
            @endif

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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
