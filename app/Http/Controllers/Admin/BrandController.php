<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Session;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.QLBrand.';
        $this->viewnamespace='panel/brand';
    }

    public function index()
    {
        $brands = Brand::all();
        return view( $this->viewprefix.'index',compact('brands'));
    }

    public function create()
    {
        return view($this->viewprefix.'create');
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $this->validate($request,[
            'name'=>'required',
            'content'=>'required',
        ]);
        $brand->name= $request->name;
        $brand->image = $this->imageUpload($request);
        $brand->content= $request->content;
        $brand->status= $request->status;
        if($brand->save())
            Session::flash('message','Tạo Thương Hiệu Sản Phẩm Thành Công!');
        else
            Session::flash('message','Tạo Thương Hiệu Sản Phẩm Thất Bại!');
        return redirect()->route('brand.index');
    }

    public function edit(Brand $brand)
    {
        return view($this->viewprefix.'edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name'=>'required',
            'content' => 'required',
        ]);
        $brand->image = $this->imageUpload($request);
        $brand->name=$request->name;
        $brand->content=$request->content;
        $brand->status=$request->status;
        if($brand->save())
            Session::flash('message', 'Cập Nhật Thương Hiệu Sản Phẩm Thành Công!');
        else
            Session::flash('message', 'Cập Nhật Thương Hiệu Sản Phẩm Thất Bại!');
        return redirect()->route('brand.index');
    }

    public function delete($id)
    {
        $brand = Brand::findOrFail($id);
        if($brand -> delete()){
            Session::flash('message','Xóa Thương Hiệu Sản Phẩm Thành Công!!');
        }
        else{
            Session::flash('message','Xóa Thương Hiệu Sản Phẩm Thất Bại!');
        }
        return redirect()->route('brand.index');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/img_brand'),$imageName);
                return $imageName;
            }
        }
        return '';
    }

    public function active($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = 1;
        if($brand -> save()){
            Session::flash('message','Mở Khóa Thương Hiệu Sản Phẩm!');
        }
        else{
            Session::flash('message','Khóa Thương Hiệu Sản Phẩm!');
        }
        return redirect()->route('brand.index');
    }
    public function unactive($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = 0;
        if($brand -> save()){
            Session::flash('message','Khóa Thương Hiệu Sản Phẩm!');
        }
        else{
            Session::flash('message','Mở Khóa Thương Hiệu Sản Phẩm!');
        }
        return redirect()->route('brand.index');
    }
}
