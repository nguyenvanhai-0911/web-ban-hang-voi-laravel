@extends('layout_admin')
@section('admin_content')
    <div class="container-fluid">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Brand Product</h4>
                                <h6 class="card-subtitle">Brand Product<code>.table</code></h6>
                                <a href="{{route('brand.create')}}" class="btn btn-primary" style="background:#26c6da">Add Brand Product</a>
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
                                                    <th class="border-top-0">Image</th>
                                                    <th class="border-top-0">Name</th>
                                                    <th class="border-top-0">View product</th>
                                                    <th class="border-top-0">Edit</th>
                                                    <th class="border-top-0">Lock</th>
                                                    <th class="border-top-0">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($brands ?? '' as $brand)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_brand/'.$brand->image)}}" width="90"/></td>
                                                    <td>{{$brand->name}} </td>

                                                    <td><a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

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
