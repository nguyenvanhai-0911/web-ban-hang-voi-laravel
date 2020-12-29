<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.QLCategory.';
        $this->viewnamespace='panel/category';
    }

    public function index()
    {
        $categories = Category::all();
        return view( $this->viewprefix.'index',compact('categories'));
    }

    public function create()
    {
        return view($this->viewprefix.'create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'content'=>'required',
        ]);
        $category->name= $request->name;
        $category->image = $this->imageUpload($request);
        $category->price= $request->price;
        $category->discount= $request->discount;
        $category->content= $request->content;
        $category->status= $request->status;
        if($category->save())
            Session::flash('message','Tạo Danh Mục Sản Phẩm Thành Công!');
        else
            Session::flash('message','Tạo Danh Mục Sản Phẩm Thất Bại!');
        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view($this->viewprefix.'edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>'required',
            'price' => 'required',
            'discount'=>'required',
            'content' => 'required',
        ]);
        $category->image = $this->imageUpload($request);
        $category->price=$request->price;
        $category->name=$request->name;
        $category->discount=$request->discount;
        $category->content=$request->content;
        $category->status=$request->status;
        if($category->save())
            Session::flash('message', 'Cập Nhật Danh Mục Sản Phẩm Thành Công!');
        else
            Session::flash('message', 'Cập Nhật Danh Mục Sản Phẩm Thất Bại!');
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        if($category -> delete()){
            Session::flash('message','Xóa Danh Mục Sản Phẩm Thành Công!!');
        }
        else{
            Session::flash('message','Xóa Danh Mục Sản Phẩm Thất Bại!');
        }
        return redirect()->route('category.index');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/img_category'),$imageName);
                return $imageName;
            }
        }
        return '';
    }

    public function productlist($id){
        $cat = Category::all();
        $brand = Brand::all();
        $products = Category::find($id)->product;
        return view($this->viewprefix.'productlist', compact('products','cat','brand'));
    }

    public function active($id)
    {
        $category = Category::findOrFail($id);
        $category->status = 1;
        if($category -> save()){
            Session::flash('message','Mở Khóa Danh Mục Sản Phẩm!');
        }
        else{
            Session::flash('message','Khóa Danh Mục Sản Phẩm!');
        }
        return redirect()->route('category.index');
    }
    public function unactive($id)
    {
        $category = Category::findOrFail($id);
        $category->status = 0;
        if($category -> save()){
            Session::flash('message','Khóa Danh Mục Sản Phẩm!');
        }
        else{
            Session::flash('message','Mở Khóa Danh Mục Sản Phẩm!');
        }
        return redirect()->route('category.index');
    }


}
