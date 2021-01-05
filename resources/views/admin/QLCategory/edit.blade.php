@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Chỉnh Sửa Danh Mục Sản Phẩm</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Chỉnh Sửa Danh Mục<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Hình Ảnh:</label>
                                                <input type="file" class="form-control" id="ful" name="image" value="{{$category->image}}" style="padding-top: 3px">
                                                <tr><img id="imgPre" src="{{asset('public/images/img_category/'.$category->image)}}" alt="Không Có Ảnh" class="img-thumbnail" width="90"></ /></tr></br>
                                            </tr>
                                            <tr>
                                                <label for="name">Tên Danh Mục:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                                            </tr>
                                            <tr>
                                                <label for="price">Giá Bán:</label>
                                                <input type="text" class="form-control" id="price" name="price" value="{{$category->price}}">
                                            </tr>
                                            <tr>
                                                <label for="discount">Giảm Giá:</label>
                                                <input type="text" class="form-control" id="discount" name="discount" value="{{$category->discount}}">
                                            </tr>
                                            <tr>
                                                <label for="content">Mô Tả:</label>
                                                <textarea type="text" class="form-control" id='id_ckeditor' name="content">{{$category->content}}</textarea>
                                            </tr>
                                            <tr>
                                                <label for="status">Trạng Thái:</label>
                                                <select type="text" class="form-control" id="status" name="status">
                                                    <option value="1" <?php if($category->status==1){ echo 'selected'; } ?>>Còn Hàng</option>
                                                    <option value="0" <?php if($category->status==0){ echo 'selected'; } ?>>Hết Hàng</option>
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
