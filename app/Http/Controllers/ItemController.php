<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    //
    public function createItem(Request $request){
        $rules=[
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
             return back()->with('errors', $validator->messages()->all()[0])->withInput();
         }

         $item = Items::create(request(['nama','kategori','harga']));
         $item->save();
         return redirect(url()->previous())->with('success', 'Item successfully created!');
    }

    public function updateItem(Request $request,$id){
        $rules=[
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
             return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $item = Items::find($id);
        if($item!=null){
            $item->nama = $request->nama;
            $item->kategori = $request->kategori;
            $item->harga = $request->harga;
            $item->save();
        }

        return redirect('/toItem')->with('success', 'Item successfully updated!');

    }

    public function deleteItem($id){
        $item = Items::find($id);
            if($item){
                $item->delete();
            }
            return redirect('/toItem')->with('success', 'Item successfully deleted!');
        }
    }
