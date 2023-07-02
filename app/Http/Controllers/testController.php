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
        $request->validate([
            'brand' => 'required',
            'name' => 'required',
            'ml' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $product = new product();
        $product->brand = $request->input('brand');
        $product->name = $request->input('name');
        $product->ml = $request->input('ml');
        $product->price = $request->input('price');
        $product->image=$imageName;
        $product->save();

        return redirect('/admin')->with('success','You have successfully added product.');
    }

    public function update(Request $request,$id){
       $product= product::where('id',$id)->first();
       return view('admin',['data'=>$data]);
    }

    public function delete($id){
        DB::delete("delete from products where id=?",[$id]);
        return redirect('/admin');
    }
}
