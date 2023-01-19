<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Sales;
use App\Models\SalesItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesItemController extends Controller
{
    //
    public function updateItemSale(Request $request,$notaId,$itemId){
        $sale =Sales::find($notaId);
        $salesItem = SalesItems::where('nota',$notaId)->where('kode_barang',$itemId)->first();

        $item =Items::find($itemId);
        $sale->subtotal += ($request->qty * $item->harga) - ($salesItem->qty * $item->harga);
        DB::UPDATE('update sales_items set qty = ? where nota = ? and kode_barang = ?',[$request->qty,$notaId,$itemId]);

        $salesItem->save();
        $sale->save();
        return redirect('/toSales')->with('success', 'Sale item successfully updated!');

    }

    public function deleteItemSale($notaId,$itemId){
        $sale =Sales::find($notaId);
        $salesItem = SalesItems::where('nota',$notaId)->where('kode_barang',$itemId)->first();
        $item =Items::find($itemId);
        $sale->subtotal -= ($salesItem->qty * $item->harga);
        $salesItem = SalesItems::where('nota',$notaId)->where('kode_barang',$itemId)->delete();
        $sale->save();
        return redirect('/toSales')->with('success', 'Sale item successfully deleted!');
    }
}
