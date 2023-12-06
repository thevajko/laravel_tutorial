@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>{{ __('Edit the user') }}</b></div>
                    <div class="card-body">
                        @include('user.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
