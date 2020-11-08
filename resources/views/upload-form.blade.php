@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload docs</div>

                <div class="card-body">

                    <form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
                        <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input type="file"  class="form-control-file" multiple name="file[]">
                            <br>
                        <button type="submit">Загрузить</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        @endsection



