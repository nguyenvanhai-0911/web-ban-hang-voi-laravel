@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Add Account</h4>
                                <h6 class="card-subtitle" style="text-align: center;">Add Account<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('user.postcreate')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" id="image" name="image" style="padding-top: 3px">
                                            </tr>
                                            <tr>
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="txtname" required>
                                            </tr>
                                            <tr>
                                                <label for="email">Email:</label>
                                            <input type="text" class="form-control" id="email" name="txtemail" required>
                                            </tr>
                                            <tr>
                                                <label for="phone">Phone:</label>
                                                <input type="text" class="form-control" id="phone" name="txtphone">
                                            </tr>
                                            <tr>
                                                <label for="cmnd">CMND:</label>
                                                <input type="text" class="form-control" id="cmnd" name="txtcmnd">
                                            </tr>
                                            <tr>
                                                <label for="birthdate">Date Of Birth:</label>
                                                <input type="date" class="form-control" id="birthdate" name="txtbirthdate">
                                            </tr>
                                            <tr>
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address" name="txtaddress">
                                            </tr>
                                            <tr>
                                                <label for="position">Position:</label>
                                                <select type="text" class="form-control" id="position" name="txtposition">
                                                    <option value="Quản Lý">Quản Lý</option>
                                                    <option value="Nhân Viên Bán Hàng">Nhân Viên Bán Hàng</option>
                                                    <option value="Nhân Viên Tư Vấn">Nhân Viên Tư Vấn</option>
                                                </select>
                                            </tr>
                                            <tr>
                                                <label for="pwd">Password:</label>
                                                <input type="text" class="form-control" id="pwd" name="txtpassword" required>
                                            </tr>
                                            <tr>
                                                <label for="status">Status:</label>
                                                <select type="text" class="form-control" id="status" name="txtstatus">
                                                    <option value="1">Hoạt Động</option>
                                                    <option value="0">Không Hoạt Động</option>
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
