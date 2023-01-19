<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
     //CREATE
     public function createCustomer(Request $request){
        $rules=[
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'domisili' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
         }

         $customer = Customers::create(request(['nama','jenis_kelamin','domisili']));
         $customer->save();
         return redirect('/toCustomer')->with('success', 'Customer successfully created!');;
    }

    public function updateCustomer(Request $request, $id){
        $rules=[
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'domisili' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $customer = Customers::find($id);
        if($customer!=null){
            $customer->nama = $request->nama;
            $customer->jenis_kelamin = $request->jenis_kelamin;
            $customer->domisili = $request->domisili;
            $customer->save();
        }

        return redirect('/toCustomer')->with('success', 'Customer successfully updated!');;

    }

    public function deleteCustomer($id){
        $customer = Customers::find($id);
        if($customer!=null){
            $customer->delete();
        }
        return redirect(url()->previous())->with('success', 'Customer successfully deleted!');;
    }

}
