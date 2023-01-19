<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Items;
use App\Models\Sales;
use App\Models\SalesItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    //
     //CREATE
    public function createSale(Request $request){
        $rules=[
            'kode_pelanggan' => 'required',
            'kode_barang'=>"required",
            'qty'=>"required"
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
             return back()->with('errors', $validator->messages()->all()[0])->withInput();
         }

        $sales = new Sales();
        $item = Items::find($request->kode_barang);
        $sales->kode_pelanggan = $request->kode_pelanggan;
        $sales->tgl = date(now());
        $sales->subtotal = $request->qty * $item->harga;
        $sales->save();

        $salesItem = new SalesItems();
        $salesItem->nota = $sales->id;
        $salesItem->kode_barang = $item->id;
        $salesItem->qty = $request->qty;
        $salesItem->save();


        return redirect('/')->with('success', 'Sale successfully created!');

    }

    public function deleteSale($id){
        $sale = Sales::find($id);
        if($sale){
            $sale->delete();
            return redirect(url()->previous())->with('success', 'Sale successfully deleted!');
        }
    }

    public function updateSale(Request $request,$id){
        $sale = Sales::find($id);
        if($sale){
            $sale->kode_pelanggan = $request->kode_pelanggan;
            $sale->save();
            return redirect('/toSales')->with('success', 'Sale successfully updated!');
        }
    }

    public function addMoreItem(Request $request,$id){
        $sale = Sales::find($id);
        $item = Items::find($request->kode_barang);
        if($sale){
            $sale->subtotal = $request->qty * $item->harga + $sale->subtotal;
            $sale->save();
        }
        $salesItem = SalesItems::where('nota',$id)->where('kode_barang',$item->id)->first();
        if($salesItem){
            DB::UPDATE('update sales_items set qty = ? where nota = ? and kode_barang = ?',[$request->qty + $salesItem->qty,$sale->id,$item->id]);
        }else{
            $salesItem = new SalesItems();
            $salesItem->nota = $sale->id;
            $salesItem->kode_barang = $item->id;
             $salesItem->qty = $request->qty;
        }
        $salesItem->save();

        return redirect('/toSales')->with('success', 'Sale successfully Added!');
    }
}
