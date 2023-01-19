@extends('layout.app')

{{-- set title --}}
@section('title',' Customer')

@section('content')

<div>
    <h2>All Sales</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">TGL </th>
        <th class="text-center">Kode Pelanggan</th>
        <th class="text-center">Subtotal</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    @foreach ($sales as $s)
        <tr>
            <td><a href="/toSaleItem/{{$s->id}}">{{$s->id}}</a></a></td>
            <td>{{$s->tgl}}</td>
            <td>{{$s->kode_pelanggan}}</td>
            <td>{{$s->subtotal}}</td>
            <td>
                <a href="/toUpdateSale/{{$s->id}}"><button class="update">UPDATE</button></a>
                <a href="/Sale/delete/{{$s->id}}"><button class="delete">DELETE</button></a>
                <a href="/Sale/addMore/{{$s->id}}"><button class="addMoreItem">ADD MORE ITEM</button></a>
              </td>
        </tr>
    @endforeach
  </table>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Sale
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Sale</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="/createSale" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nama">Nama Customer</label>
              <select name="kode_pelanggan" class="form-control">
                <option value="" hidden>Select Customer</option>
                @foreach ($customers as $c)
                    <option  value="{{$c->id}}">{{$c->nama}}</option>
                @endforeach
              </select>
            </div>
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
              {{-- <div class="form-group">
                <label for="nama">Add more Item</label>
                <button type="button" name="add" id="add" class="btn btn-success">+</button>
              </div> --}}
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


