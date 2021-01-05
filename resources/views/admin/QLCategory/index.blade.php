@extends('layout_admin')
@section('admin_content')
<style>
.hidden{
    display: none;
}
</style>
    <div class="container-fluid">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Danh Mục Sản Phẩm</h4>
                                <h6 class="card-subtitle">Danh Mục<code>.table</code></h6>
                                <a href="{{route('category.create')}}" class="btn btn-primary" style="background:#26c6da">Thêm Danh Mục Sản Phẩm</a>
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
                                                    <th class="border-top-0">Giá Bán</th>
                                                    <th class="border-top-0">Giảm Giá</th>
                                                    <th class="border-top-0">Sản Phẩm</th>
                                                    <th class="border-top-0">Chỉnh Sửa</th>
                                                    <th class="border-top-0">Trạng Thái</th>
                                                    <th class="border-top-0">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categories ?? '' as $category)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_category/'.$category->image)}}" width="90"/></td>
                                                    <td>{{$category->name}} </td>
                                                    <td>{{$category->price}} </td>
                                                    <td>{{$category->discount}} </td>

                                                    <td><a href="{{route('category.productlist',$category->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                                                    <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                        if($category->status == 1)
                                                        { ?>
                                                            <a href="{{route('category.unactive',$category->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                        <?php }
                                                        else if($category->status == 0)
                                                        { ?>
                                                            <a href="{{route('category.active',$category->id)}}" class="btn btn-warning" style="color: black"><i class="fa fa-lock"></i></a>
                                                        <?php } ?>
                                                    </td>

                                                    <td><a href="{{route('category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                                </tr>
                                                @endforeach
                                                <tr><td colspan="10">{{$categories->links()}}</td></tr>
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
