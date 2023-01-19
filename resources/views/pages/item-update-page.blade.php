@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div class="container p-5">

    <h4>Edit Barang</h4>

    <form action="/Item/update/{{$id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" placeholder="{{$item->nama}}" required>
          </div>
          <div class="form-group">
              <label for="nama">Kategori</label>
              <input type="text" class="form-control" name="kategori" placeholder="{{$item->kategori}}" required>
            </div>
            <div class="form-group">
              <label for="nama">Harga</label>
              <input type="text" class="form-control" name="harga" placeholder="{{$item->harga}}" required>
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary" style="height:40px">Update Barang</button>
          </div>
    </form>

</div>

@endsection
