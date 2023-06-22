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
        $store = $request->only(['brand','name','ml','price','image']);
        product::create($store);
        return back();
    }

    public function delete($id){
        DB::delete("delete from products where id=?",[$id]);

        $data = product::all();
        return view('admin',['data'=>$data]);
    }
   
}
