@extends('layout_admin')
@section('admin_content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Edit Account</h4>
                                <h6 class="card-subtitle" style="text-align:center">Edit Account<code>.table</code></h6>
                                <div class="table-responsive">
                                <form action="{{route('user.postedit',$user->id)}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table user-table">
                                        <tbody>
                                            <tr>
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" id="image" name="image" value="{{$user->image}}" style="padding-top: 3px">
                                            </tr>
                                            <tr>
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="txtname" value="{{$user->name}}">
                                            </tr>
                                            <tr>
                                                <label for="email">Email:</label>
                                                <input type="text" class="form-control" id="email" name="txtemail" value="{{$user->email}}">
                                            </tr>
                                            <tr>
                                                <label for="phone">Phone:</label>
                                                <input type="text" class="form-control" id="phone" name="txtphone" value="{{$user->phone}}">
                                            </tr>
                                            <tr>
                                                <label for="cmnd">CMND:</label>
                                                <input type="text" class="form-control" id="cmnd" name="txtcmnd" value="{{$user->cmnd}}">
                                            </tr>
                                            <tr>
                                                <label for="birthdate">Date Of Birth:</label>
                                                <input type="date" class="form-control" id="birthdate" name="txtbirthdate" value="{{$user->birthdate}}">
                                            </tr>
                                            <tr>
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address" name="txtaddress" value="{{$user->address}}">
                                            </tr>
                                            <tr>
                                                <label for="position">Position:</label>
                                                <select type="text" class="form-control" id="position" name="txtposition">
                                                    <option value="Quản Lý" <?php if($user->position=='Quản Lý'){ echo 'selected'; } ?> >Quản Lý</option>
                                                    <option value="Nhân Viên Bán Hàng" <?php if($user->position=='Nhân Viên Bán Hàng'){ echo 'selected'; } ?> >Nhân Viên Bán Hàng</option>
                                                    <option value="Nhân Viên Tư Vấn" <?php if($user->position=='Nhân Viên Tư Vấn'){ echo 'selected'; } ?> >Nhân Viên Tư Vấn</option>
                                                </select>
                                            </tr>
                                            <tr>
                                                <label for="pwd">Password:</label>
                                                <input type="text" class="form-control" id="pwd" name="txtpassword" value="{{$user->password}}">
                                            </tr>
                                            <tr>
                                                <label for="status">Status:</label>
                                                <select type="text" class="form-control" id="status" name="txtstatus">
                                                    <option value="1" <?php if($user->status==1){ echo 'selected'; } ?> >Hoạt Động</option>
                                                    <option value="0" <?php if($user->status==0){ echo 'selected'; } ?> >Không Hoạt Động</option>
                                                </select>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection
