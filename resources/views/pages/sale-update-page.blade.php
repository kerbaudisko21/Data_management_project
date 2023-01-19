@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div class="container p-5">

    <h4>Edit {{$sales->id}}</h4>

    <form action="/Sale/update/{{$id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <select name="kode_pelanggan" class="form-control">
                <option value="" hidden>Select Customer</option>
                @foreach ($customer as $c)
                    <option  value="{{$c->id}}">{{$c->nama}}</option>
                @endforeach
              </select>
        </div>
          <div class="form-group">
            <button  type="submit" class="btn btn-secondary" style="height:40px">Update Nota</button>
          </div>
    </form>

</div>

@endsection
