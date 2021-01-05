@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Chỉnh Sửa Sản Phẩm</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Chỉnh Sửa Sản Phẩm<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Hình Ảnh:</label>
                                                <input type="file" class="form-control" id="ful" name="image" value="{{$product->image}}" style="padding-top: 3px">
                                                <tr><img id="imgPre" src="{{asset('public/images/img_product/'.$product->image)}}" alt="Không Có Ảnh" class="img-thumbnail" width="90"></ /></tr></br>

                                            </tr>
                                            <tr>
                                                <label for="name">Tên Sản Phẩm:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                                            </tr>
                                            <tr>
                                                <label for="idcat">Danh Mục:</label>
                                                <select name="idcat" class="form-control">
                                                    @foreach($id_cat ?? '' as $category)
                                                        <option value="{{$category->id}}" <?php if($product->idcat== $category->id){echo 'selected';}?>>{{$category->name}}</option>
                                                    @endforeach
                                                <select>
                                            </tr>
                                            <tr>
                                                <label for="idbrand">Thương Hiệu:</label>
                                                    <select name="idbrand" class="form-control">
                                                        @foreach($id_brand ?? '' as $brand)
                                                            <option value="{{$brand->id}}" <?php if($product->idbrand== $brand->id){echo 'selected';}?>>{{$brand->name}}</option>
                                                        @endforeach
                                                    <select>
                                            </tr>
                                            <tr>
                                                <label for="price">Giá Bán:</label>
                                                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
                                            </tr>
                                            <tr>
                                                <label for="discount">Giảm Giá:</label>
                                                <input type="text" class="form-control" id="discount" name="discount" value="{{$product->discount}}">
                                            </tr>
                                            <tr>
                                                <label for="content">Mô Tả:</label>
                                                <textarea type="text" class="form-control" id='id_ckeditor' name="content">{{$product->content}}</textarea>
                                            </tr>
                                            <tr>
                                                <label for="status">Trạng Thái:</label>
                                                <select type="text" class="form-control" id="status" name="status">
                                                    <option value="1" <?php if($product->status==1){ echo 'selected'; } ?>>Còn Bán</option>
                                                    <option value="0" <?php if($product->status==0){ echo 'selected'; } ?>>Ngưng Bán</option>
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

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script type="text/javascript">
                function readURL(input, idImg) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $(idImg).attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                $("#ful").change(function () {
                    readURL(this, '#imgPre');
                });
            </script>

            @endsection

