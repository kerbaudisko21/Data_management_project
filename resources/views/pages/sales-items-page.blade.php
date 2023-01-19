@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div>
    <h2>All Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Nota Barang</th>
        <th class="text-center">Kode Barang</th>
        <th class="text-center">Qty</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>

        @foreach ($sales->idNota as $s)
            <tr>
                <td>{{$s->nota}}</td>
                <td>{{$s->kode_barang}}</td>
                <td>{{$s->qty}}</td>
                <td>
                    <a href="/itemSale/update/{{$s->nota}}/{{$s->kode_barang}}"><button class="update">UPDATE</button></a>
                    <a href="/saleItem/delete/{{$s->nota}}/{{$s->kode_barang}}"><button class="delete">DELETE</button></a>
                </td>
            </tr>
        @endforeach

</div>

@endsection
@push('after-style')
<style>

  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: #584e46;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }
</style>
