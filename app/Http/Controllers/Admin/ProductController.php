<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use DB;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.QLProduct.';
        $this->viewnamespace='panel/product';
    }

    public function index()
    {
        $cat = Category::all();
        $brand = Brand::all();
        $products = Product::all();
        return view( $this->viewprefix.'index',compact('products','cat','brand'));
    }

    public function create()
    {
        $id_cat = Category::all();
        $id_brand = Brand::all();
        return view($this->viewprefix.'create', compact('id_cat','id_brand'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $this->validate($request,[
            'name'=>'required',
            'idcat'=>'required',
            'idbrand'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'content'=>'required',
        ]);
        $product->name= $request->name;
        $product->idcat= $request->idcat;
        $product->idbrand= $request->idbrand;
        $product->image = $this->imageUpload($request);
        $product->price= $request->price;
        $product->discount= $request->discount;
        $product->content= $request->content;
        $product->status= $request->status;
        if($product->save())
            Session::flash('message','Thêm Sản Phẩm Thành Công!');
        else
            Session::flash('message','Thêm Sản Phẩm Thất Bại!');
        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $id_cat = Category::all();
        $id_brand = Brand::all();
        return view($this->viewprefix.'edit', compact('product', 'id_cat', 'id_brand'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'name'=>'required',
            'idcat'=>'required',
            'idbrand'=>'required',
            'price' => 'required',
            'discount'=>'required',
            'content' => 'required',
        ]);
        $product->image = $this->imageUpload($request);
        $product->price=$request->price;
        $product->name=$request->name;
        $product->idcat=$request->idcat;
        $product->idbrand=$request->idbrand;
        $product->discount=$request->discount;
        $product->content=$request->content;
        $product->status=$request->status;
        if($product->save())
            Session::flash('message', 'Cập Nhật Sản Phẩm Thành Công!');
        else
            Session::flash('message', 'Cập Nhật Sản Phẩm Thất Bại!');
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if($product -> delete()){
            Session::flash('message','Xóa Sản Phẩm Thành Công!!');
        }
        else{
            Session::flash('message','Xóa Sản Phẩm Thất Bại!');
        }
        return redirect()->route('product.index');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/img_product'),$imageName);
                return $imageName;
            }
        }
        return '';
    }

    public function active($id)
    {
        $product = Product::findOrFail($id);
        $product->status = 1;
        if($product -> save()){
            Session::flash('message','Mở Khóa Sản Phẩm!');
        }
        else{
            Session::flash('message','Khóa Sản Phẩm!');
        }
        return redirect()->route('product.index');
    }
    public function unactive($id)
    {
        $product = Product::findOrFail($id);
        $product->status = 0;
        if($product -> save()){
            Session::flash('message','Khóa Sản Phẩm!');
        }
        else{
            Session::flash('message','Mở Khóa Sản Phẩm!');
        }
        return redirect()->route('product.index');
    }
}
