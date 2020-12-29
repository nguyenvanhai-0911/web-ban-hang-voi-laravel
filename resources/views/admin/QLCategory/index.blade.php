@extends('layout_admin')
@section('admin_content')
    <div class="container-fluid">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Category Product</h4>
                                <h6 class="card-subtitle">Category Product<code>.table</code></h6>
                                <a href="{{route('category.create')}}" class="btn btn-primary" style="background:#26c6da">Add Category Product</a>
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
                                                    <th class="border-top-0">Price</th>
                                                    <th class="border-top-0">Discount</th>
                                                    <th class="border-top-0">View product</th>
                                                    <th class="border-top-0">Edit</th>
                                                    <th class="border-top-0">Lock</th>
                                                    <th class="border-top-0">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categories ?? '' as $category)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_category/'.$category->image)}}" width="90"/></td>
                                                    <td>{{$category->name}} </td>
                                                    <td>{{$category->price}} </td>
                                                    <td>{{$category->discount}} </td>

                                                    <td><a href="{{route('category.productlist',$category->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                                                    <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                        if($category->status == 1)
                                                        { ?>
                                                            <a href="{{route('category.unactive',$category->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                        <?php }
                                                        else if($category->status == 0)
                                                        { ?>
                                                            <a href="{{route('category.active',$category->id)}}" class="btn btn-warning" style="color: black"><i class="fa fa-lock"></i></a>
                                                        <?php } ?>
                                                    </td>

                                                    <td><a href="{{route('category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

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
