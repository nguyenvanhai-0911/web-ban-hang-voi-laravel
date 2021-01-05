@extends('layout_admin')
@section('admin_content')

    <div class="container-fluid">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Danh Mục Sản Phẩm</h4>
                                <h6 class="card-subtitle">Danh Mục
                                    @foreach($products ?? '' as $product)
                                        <?php foreach($cat as $category){
                                                            if($product->idcat == $category->id){
                                                                echo $category->name;
                                                            }
                                        }?>
                                    @endforeach
                                <code>.table</code></h6>
                                <a href="{{route('product.create')}}" class="btn btn-primary" style="background:#26c6da">Thêm Sản Phẩm</a>
                                <div class="table-responsive">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            {{Session::get('message')}}
                                        </div>
                                    @endif
                                        <table class="table user-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">#</th>
                                                    <th class="border-top-0">Hình Ảnh</th>
                                                    <th class="border-top-0">Tên Danh Mục</th>
                                                    <!-- <th class="border-top-0">Category</th> -->
                                                    <th class="border-top-0">Thương Hiệu</th>
                                                    <th class="border-top-0">Giá Bán</th>
                                                    <th class="border-top-0">Giảm Giá</th>
                                                    <th class="border-top-0">Chỉnh Sửa</th>
                                                    <th class="border-top-0">Trạng Thái</th>
                                                    <th class="border-top-0">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products ?? '' as $product)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_product/'.$product->image)}}" width="90"/></td>
                                                    <td>{{$product->name}} </td>
                                                    <!-- <td>
                                                    </td> -->
                                                    <td>
                                                        <?php foreach($brand as $br){
                                                            if($product->idbrand == $br->id)
                                                                echo $br->name;
                                                        }?>
                                                    </td>
                                                    <td>{{$product->price}} </td>
                                                    <td>{{$product->discount}} </td>

                                                    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                        if($product->status == 1)
                                                        { ?>
                                                            <a href="{{route('product.unactive',$product->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                        <?php }
                                                        else if($product->status == 0)
                                                        { ?>
                                                            <a href="{{route('product.active',$product->id)}}" class="btn btn-warning" style="color: black"><i class="fa fa-lock"></i></a>
                                                        <?php } ?>
                                                    </td>

                                                    <td><a href="{{route('product.delete',$product->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection
