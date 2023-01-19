@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div class="container p-5">

    <h4>Update Qty</h4>

    <form action="/saleItem/update/{{$notaId}}/{{$itemId}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="nama">Qty</label>
            <input type="text" class="form-control" name="qty" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary" style="height:40px">Update Qty</button>
          </div>
    </form>

</div>

@endsection
