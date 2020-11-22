@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Report create</div>

                <div class="card-body">
           <form method="post" action="/doc_create" >

               @csrf
               <select class="browser-default custom-select" name="doc" >
                   <option selected>Выбор отчета</option>
                   <option value="work_plan">План работ</option>
                   <option value="fuel">Топливо</option>
                   <option value="siz">СИЗ</option>
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
           </form>

                    <br><br>
                </div>
            </div>
        </div>
        @endsection



