@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Engine Work</div>

                <div class="card-body">

                    <select class="browser-default custom-select">
                        <option selected>Выбор ДГУ</option>
                        <option value="1">SD6000E</option>
                        <option value="2">ADR16.5</option>
                    </select>
                    <br><br>
                    <select class="browser-default custom-select">
                        <option selected>Тип запуска</option>
                        <option value="1">Техобслуживание</option>
                        <option value="2">Авария промсети</option>
                    </select>
                    <br><br>
                    <label>Время запуска</label>
                    <br><br>

                    <label>Время останова</label>
                    <br>
                    <input type="text">
                    <br><br>
                    <input  type="submit"  value="в базу" >
                    <br><br>
                </div>
            </div>
        </div>
        @endsection



