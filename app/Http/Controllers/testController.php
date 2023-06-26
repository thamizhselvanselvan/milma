<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function home(Request $request){
        $data = product::all();
        return view('home',['data'=>$data]);
    } 

    public function admin(Request $request){
        $data = product::all();
        return view('admin',['data'=>$data]);
    }

    public function store(Request $request){
        $store = $request->validate([
            'brand'=>'required',
            'name'=>'required',
            'ml'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:svg,png,jpeg,jpg,gif',
        ]);
        product::create($store);
        return redirect('/admin')->with('success','You have successfully added product.');
    }


    public function delete($id){
        DB::delete("delete from products where id=?",[$id]);
        return redirect('/admin');
    }

}
