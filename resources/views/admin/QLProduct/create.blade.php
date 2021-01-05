@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Thêm Sản Phẩm</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Thêm Sản Phẩm<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Hình Ảnh:</label>
                                                <input type="file" class="form-control" id="image" name="image" style="padding-top: 3px">
                                            </tr>
                                            <tr>
                                                <label for="name">Tên Sản Phẩm:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="" required>
                                            </tr>
                                            <tr>
                                                <label for="idcat">Danh Mục:</label>
                                                <select name="idcat" class="form-control">
                                                    @foreach($id_cat ?? '' as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                <select>
                                            </tr>
                                            <tr>
                                                <label for="idbrand">Thương Hiệu:</label>
                                                <select name="idbrand" class="form-control">
                                                    @foreach($id_brand ?? '' as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                <select>
                                            </tr>
                                            <tr>
                                                <label for="price">Giá Bán:</label>
                                                <input type="text" class="form-control" id="price" name="price" value="" required>
                                            </tr>
                                            <tr>
                                                <label for="discount">Giảm Giá:</label>
                                                <input type="text" class="form-control" id="discount" name="discount" value="" required>
                                            </tr>
                                            <tr>
                                                <label for="content">Mô Tả:</label>
                                                <textarea type="text" class="form-control" id='id_ckeditor' name="content" value="" required></textarea>
                                            </tr>
                                            <tr>
                                                <label for="status">Trạng Thái:</label>
                                                <select type="text" class="form-control" id="status" name="status">
                                                    <option value="1">Còn Bán</option>
                                                    <option value="0">Ngưng Bán</option>
                                                </select>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="btnregister"class="btn btn-primary" style="background:#26c6da">Thực Hiện</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
