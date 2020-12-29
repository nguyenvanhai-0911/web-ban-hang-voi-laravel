@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Update Brand Product</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Update Brand Product<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" id="image" name="image" value="{{$brand->image}}" style="padding-top: 3px">
                                                <tr>
                                                    <img src="{{asset('public/images/img_brand/'.$brand->image)}}" width="90"/>
                                                </tr></br>
                                            </tr>
                                            <tr>
                                                <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
                                            </tr>
                                            <tr>
                                                <label for="content">Content:</label>
                                                <textarea type="text" class="form-control" id='id_ckeditor' name="content">{{$brand->content}}</textarea>
                                            </tr>
                                            <tr>
                                                <label for="status">Status:</label>
                                                <select type="text" class="form-control" id="status" name="status">
                                                    <option value="1" <?php if($brand->status==1){ echo 'selected'; } ?>>Còn Hàng</option>
                                                    <option value="0" <?php if($brand->status==0){ echo 'selected'; } ?>>Hết Hàng</option>
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
