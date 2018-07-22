@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-body">
                    <form method="POST" action="{{ route('farmers.import') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="farmers" class="col-sm-4 col-form-label text-md-right">
                                Select Farmers CSV File
                                <br>
                                (<a href="https://docs.google.com/spreadsheets/d/1KeAEIGzUAQiP7D482u287R3tXLEg4VDC2PfpFo1bOR4/edit?usp=sharing" target="_blank">see sample csv</a>)
                            </label>

                            <div class="col-md-6">
                                <input id="farmers" type="file" name="farmers" class="form-control" required autofocus>
                                @if ($errors->has('farmers'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('farmers') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-custom">
                                   <i class="fa fa-cloud-upload"></i> <strong>Import csv</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
