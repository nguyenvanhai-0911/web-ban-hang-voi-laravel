@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Add Category Product</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Add Category Product<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" id="image" name="image" style="padding-top: 3px">
                                            </tr>
                                            <tr>
                                                <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="">
                                            </tr>
                                            <tr>
                                                <label for="price">Price:</label>
                                                <input type="text" class="form-control" id="price" name="price" value="">
                                            </tr>
                                            <tr>
                                                <label for="discount">Discount:</label>
                                                <input type="text" class="form-control" id="discount" name="discount" value="">
                                            </tr>
                                            <tr>
                                                <label for="content">Content:</label>
                                                <textarea type="text" class="form-control" id='id_ckeditor' name="content"></textarea>
                                            </tr>
                                            <tr>
                                                <label for="status">Status:</label>
                                                <select type="text" class="form-control" id="status" name="status">
                                                    <option value="1">Còn Hàng</option>
                                                    <option value="0">Hết Hàng</option>
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
