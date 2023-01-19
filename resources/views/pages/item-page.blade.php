@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div>
    <h2>All Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Nama Barang </th>
        <th class="text-center">Kategori</th>
        <th class="text-center">Harga</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    @foreach ($items as $item)

    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->kategori}}</td>
        <td>{{$item->harga}}</td>
        <td>
            <a href="/UpdateItem/{{$item->id}}"><button class="update">UPDATE</button></a>
            <a href="/Item/delete/{{$item->id}}"><button class="delete">DELETE</button></a>
          </td>
      </tr>

    @endforeach
  </table>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Item
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="/createItem" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Kategori</label>
                <input type="text" class="form-control" name="kategori" required>
              </div>
              <div class="form-group">
                <label for="nama">Harga</label>
                <input type="integer" class="form-control" name="harga" required>
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" style="height:40px">Buat barang</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>
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
