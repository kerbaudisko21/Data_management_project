<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Items;
use App\Models\Sales;
use App\Models\SalesItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function home(){
        $customers = Customers::all();
        $items = Items::all();
        $sales = Sales::all();
        $salesItem = SalesItems::all();
        return view('pages.home-page',compact('customers','items','sales','salesItem'));
    }

    public function toCustomer(){
        $customers = Customers::all();
        return view('pages.customer-page',compact('customers'));
    }

    public function toItem(){
        $items = Items::all();
        return view('pages.item-page',compact('items'));
    }

    public function toSales(){
        $customers = Customers::all();
        $items = Items::all();
        $sales = Sales::all();
        return view('pages.sales-page',compact('customers','items','sales'));
    }

    public function toUpdateCustomer($id){
        $customers = Customers::find($id);

        return view('pages.customer-update-page',compact('customers'))->with('id',$id);
    }

    public function toUpdateItem($id){
        $item = Items::find($id);
        return view('pages.item-update-page',compact('item'))->with('id',$id);
    }

    public function toSaleItem($id){
        $sales = Sales::find($id);

        return view('pages.sales-items-page',compact('sales'))->with('id',$id);
    }

    public function toUpdatesale($id){
        $sales = Sales::find($id);
        $customer= Customers::all();
        return view('pages.sale-update-page',compact('sales','customer'))->with('id',$id);
    }

    public function toAddMore($id){
        $sales = Sales::find($id);
        $items = Items::all();
        return view('pages.add-more-item',compact('sales','items'))->with('id',$id);
    }

    public function toUpdateItemsale($notaId,$itemId){

        return view('pages.item-sale-update-page',compact('notaId','itemId'));
    }
}
