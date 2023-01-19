@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div class="container p-5">

    <h4>Edit Customer</h4>

    <form action="/Customer/update/{{$id}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama" placeholder="{{$customers->nama}}"  required>
          <div class="form-group">
              <label for="nama">Jenis Kelamin:</label>
          <div>
              <input type="radio" name="jenis_kelamin" value="pria"/>Pria<br />
              <input type="radio" name="jenis_kelamin" value="wanita" />Wanita<br />
          </div>
            </div>
            <div class="form-group">
              <label for="nama">Domisili:</label>
          <div>
              <input type="radio" name="domisili" value="JAK-BAR"/>Jakarta Barat<br />
              <input type="radio" name="domisili" value="JAK-TIM" />Jakarta Timur<br />
              <input type="radio" name="domisili" value="JAK-SEL" />Jakarta Selatan<br />
              <input type="radio" name="domisili" value="JAK-UT" />Jakarta Utara<br />
          </div>
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary" style="height:40px">Update Pelanggan</button>
          </div>
    </form>

</div>

@endsection
