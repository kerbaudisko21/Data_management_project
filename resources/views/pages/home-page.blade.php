@extends('layout.app')

{{-- set title --}}
@section('title',' Home')

@section('content')
<div id="main-content" class="container allContent-section py-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                <h4 style="color:black;">Total Users</h4>
                <h5 style="color:black;">{{count($customers)}}</h5>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:black;">Total Items</h4>
                <h5 style="color:black;">
                    {{count($items)}}
               </h5>
            </div>
        </div>
        <div class="col-sm-3">
        <div class="card">
                <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                <h4 style="color:black;">Total Sales</h4>
                <h5 style="color:black;">
                    {{count($sales)}}
               </h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                <h4 style="color:black;">Total Sales Item</h4>
                <h5 style="color:black;">
                    {{count($salesItem)}}
               </h5>
            </div>
        </div>
    </div>

</div>

@endsection

@push('after-style')

<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Work Sans', sans-serif;
    font-size: 18px;
    }
    .card{
      background-color: brown;
      padding:30px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
  }


    </style>
