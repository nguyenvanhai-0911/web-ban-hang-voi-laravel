<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->get();
    //     return view('pages.layout',compact('cate'));
    // }

    public function Home(){

        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();
        $cate_all= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $product= DB::table('tbl_product')->where('status','1')->orderby('id','desc')->limit(4)->get();

        $product1= DB::table('tbl_product')
        ->where('status','1')
        ->where('name','like','%PC%')
        ->get();

        $product2= DB::table('tbl_product')
        ->where('status','1')
        ->where('name','like','%Gaming%')
        ->get();

        return view('pages.home',compact('product','product1','product2','brand','brand1','brand_img','cate','cate_all','cate1','cate_img'));
    }

    public function About(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        return view('pages.about',compact('brand','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function Shop_All(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand_all= DB::table('tbl_brand')->where('status','1')->get();

        $product= DB::table('tbl_product')->where('status','1')->get();
        $product1= DB::table('tbl_product')->where('status','1')->orderby('id','desc')->limit(4)->get();

        return view('pages.shop_all',compact('product','product1','brand','brand_all','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function Contact(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        return view('pages.contact',compact('brand','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function Single(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        return view('pages.single',compact('brand','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function Checkout(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        return view('pages.checkout',compact('brand','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function Err(){
        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        return view('pages.404',compact('brand','brand1','brand_img','cate','cate1','cate_img'));
    }

    public function search_Category($id){

        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand_all= DB::table('tbl_brand')->where('status','1')->get();
        $product_all= DB::table('tbl_product')->where('status','1')->get();

        $product= DB::table('tbl_product')
        ->select('tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image')
        ->join('tbl_category','tbl_category.id','=','tbl_product.idcat')
        ->where('tbl_product.status','1')
        ->where('tbl_product.idcat',$id)->get();
        return view('pages.shop',compact('product','product_all','brand','brand1','brand_img','brand_all','cate','cate1','cate_img'));
    }

    public function search_Brand($id){

        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand_all= DB::table('tbl_brand')->where('status','1')->get();

        $product= DB::table('tbl_product')
        ->select('tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image')
        ->join('tbl_brand','tbl_brand.id','=','tbl_product.idbrand')
        ->where('tbl_product.status','1')
        ->where('tbl_product.idbrand',$id)->get();

        $product_all= DB::table('tbl_product')->where('status','1')->get();

        return view('pages.shop',compact('product','product_all','brand','brand1','brand_img','brand_all','cate','cate1','cate_img'));
    }

    public function detail_Pro($id){

        $cate= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $cate1= DB::table('tbl_category')->where('status','1')->orderby('id')->limit(3)->get();
        $cate_img= DB::table('tbl_category')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $brand= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(3)->get();
        $brand1= DB::table('tbl_brand')->where('status','1')->orderby('id')->limit(3)->get();
        $brand_img= DB::table('tbl_brand')->where('status','1')->orderby('id','desc')->limit(1)->get();

        $product= DB::table('tbl_product')->where('tbl_product.status','1')->where('tbl_product.id',$id)->get();
        $product1= DB::table('tbl_product')->where('status','1')->get();

        $brand_all= DB::table('tbl_brand')->where('status','1')->get();

        return view('pages.single',compact('product','product1','brand','brand_all','brand1','brand_img','cate','cate1','cate_img'));
    }

}
