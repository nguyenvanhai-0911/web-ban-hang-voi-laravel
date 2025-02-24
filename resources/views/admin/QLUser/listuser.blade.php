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
                                <h4 class="card-title" style="text-align:center">Danh Sách Tài Khoản</h4>
                                <h6 class="card-subtitle">Tài Khoản<code>.table</code></h6>
                                <a href="{{route('user.create')}}" class="btn btn-primary" style="background:#26c6da">Thêm Tài Khoản</a>
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
                                                    <th class="border-top-0">Họ Tên</th>
                                                    <th class="border-top-0">Email</th>
                                                    <th class="border-top-0">Chức Vụ</th>
                                                    <th class="border-top-0">Chỉnh Sửa</th>
                                                    <th class="border-top-0">Trạng Thái</th>
                                                    <th class="border-top-0">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users ?? '' as $user)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_account/'.$user->image)}}" width="40"/></td>
                                                    <td>{{$user->name}} </td>
                                                    <td>{{$user->email}} </td>
                                                    <td>{{$user->position}} </td>
                                                    <td><a href="{{route('user.getedit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                            if($user->status == 1)
                                                            { ?>
                                                                <a  href="{{route('user.unactive',$user->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                            <?php }
                                                            else if($user->status == 0)
                                                            { ?>
                                                                <a  href="{{route('user.active',$user->id)}}" class="btn btn-warning" style="color:black"><i class="fa fa-lock"></i></a>
                                                            <?php } ?>
                                                    </td>

                                                    <td><a onclick="return confirm('Bạn Có Chắc Chắn Muốn Xóa Tài Khoản Nhân Viên?')" href="{{route('user.delete',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                                </tr>
                                                @endforeach
                                                <tr><td colspan="10">{{$users->links()}}</td></tr>
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

