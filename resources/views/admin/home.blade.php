@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        Hi boss!
                    </div>

                    <a href="{{route('admin.logout')}}"> Logout </a>
                </div>
            </div>
        </div>
    </div>
    @endsection