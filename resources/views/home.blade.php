@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Hello, {{ $myname }}, {{ $age }} years old.</h1>

                    You are logged in as {{ $auth->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
