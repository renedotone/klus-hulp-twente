@extends('layout')

@section('title', 'Admin portaal')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as ADMIN!
                </div>
            </div>
        </div>
    </div>
</div>


Test for admin only


@endsection