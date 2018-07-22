@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-body">
                    <form method="POST" action="{{ route('farmers.import') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="freq_of_storage" class="col-sm-2 col-form-label text-md-left">
                                Freq. Of Storage
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="freq_of_storage" id="freq_of_storage">
                                    @foreach(['daily','weekly','monthly','quarterly','undetermined'] as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="curr_val_storage" class="col-sm-2 col-form-label text-md-left">
                                Current Storage Value
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="curr_val_storage" id="curr_val_storage">
                                    @foreach(['less than 50,000', '50,001-100,000', '100,001-200,000', 'above 200,000'] as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-custom">
                                    <strong>Update Report</strong>
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
