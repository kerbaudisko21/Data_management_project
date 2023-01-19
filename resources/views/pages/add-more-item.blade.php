@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div class="container p-5">

    <h4>Add More Item on {{$sales->id}}</h4>

    <form action="/Sale/addMore/{{$id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="nama">Barang</label>
            <select name="kode_barang"  class="form-control">
                <option value="" hidden>Select Item</option>
                @foreach ($items as $item)
                    <option  value="{{$item->id}}">{{$item->nama}} {{$item->harga}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="nama">Qty</label>
            <input type="integer" class="form-control" name="qty" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary" style="height:40px">Add Item</button>
          </div>
    </form>

</div>

@endsection
