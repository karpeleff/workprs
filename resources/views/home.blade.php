@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Main menu</div>

                <div class="card-body">

xcgnxcgn
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Remainds</div>

                <div class="card-body">
                    <ul>
                        <li>cvb</li>
                        <li>cv cv</li>
                        <li>xcv xc</li>
                        <li>xcv xc</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
