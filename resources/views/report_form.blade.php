@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report create</div>

                <div class="card-body">

                    <select class="browser-default custom-select">
                        <option selected>Выбор отчета</option>
                        <option value="1">План работ</option>
                        <option value="2">Топливо</option>
                        <option value="3">СИЗ</option>
                        <option value="4">One</option>
                        <option value="5">Two</option>
                        <option value="6">Three</option>
                    </select>
                    <br><br>
                    <label>Период</label>
                    <br>
                    <input type="text">
                    <br><br>
                    <input  type="submit"  value="сформировать" >
                    <br><br>
                </div>
            </div>
        </div>
        @endsection



