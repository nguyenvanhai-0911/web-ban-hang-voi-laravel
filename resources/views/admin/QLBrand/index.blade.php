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
                                <h4 class="card-title" style="text-align:center">Thương Hiệu Sản Phẩm</h4>
                                <h6 class="card-subtitle">Thương Hiệu<code>.table</code></h6>
                                <a href="{{route('brand.create')}}" class="btn btn-primary" style="background:#26c6da">Thêm Thương Hiệu Sản Phẩm</a>
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
                                                    <th class="border-top-0">Tên Thương Hiệu</th>
                                                    <th class="border-top-0">Sản Phẩm</th>
                                                    <th class="border-top-0">Chỉnh Sửa</th>
                                                    <th class="border-top-0">Trạng Thái</th>
                                                    <th class="border-top-0">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($brands ?? '' as $brand)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_brand/'.$brand->image)}}" width="90"/></td>
                                                    <td>{{$brand->name}} </td>

                                                    <td><a href="{{route('brand.productlist',$brand->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                                                    <td><a href="{{route('brand.edit',$brand->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                        if($brand->status == 1)
                                                        { ?>
                                                            <a href="{{route('brand.unactive',$brand->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                        <?php }
                                                        else if($brand->status == 0)
                                                        { ?>
                                                            <a href="{{route('brand.active',$brand->id)}}" class="btn btn-warning" style="color: black"><i class="fa fa-lock"></i></a>
                                                        <?php } ?>
                                                    </td>

                                                    <td><a href="{{route('brand.delete',$brand->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                                </tr>
                                                @endforeach
                                                <tr><td colspan="10">{{$brands->links()}}</td></tr>
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
