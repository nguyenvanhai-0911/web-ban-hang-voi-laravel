@extends('layout_admin')
@section('admin_content')
    <div class="container-fluid">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">List Product</h4>
                                <h6 class="card-subtitle">List Product<code>.table</code></h6>
                                <a href="{{route('product.create')}}" class="btn btn-primary" style="background:#26c6da">Add Product</a>
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
                                                    <th class="border-top-0">Category</th>
                                                    <th class="border-top-0">Brand</th>
                                                    <th class="border-top-0">Price</th>
                                                    <th class="border-top-0">Discount</th>
                                                    <th class="border-top-0">Edit</th>
                                                    <th class="border-top-0">Lock</th>
                                                    <th class="border-top-0">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products ?? '' as $product)
                                                <tr>
                                                    <td></td>
                                                    <td> <img src="{{asset('public/images/img_product/'.$product->image)}}" width="90"/></td>
                                                    <td>{{$product->name}}</td>
                                                    <td>
                                                        <?php foreach($cat as $category){
                                                            if($product->idcat == $category->id)
                                                                echo $category->name;
                                                        }?>
                                                    </td>
                                                    <td>
                                                        <?php foreach($brand as $br){
                                                            if($product->idbrand == $br->id)
                                                                echo $br->name;
                                                        }?>
                                                    </td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->discount}}</td>

                                                    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>

                                                    <td>
                                                        <?php
                                                        if($product->status == 1)
                                                        { ?>
                                                            <a href="{{route('product.unactive',$product->id)}}" class="btn btn-warning"><i class="fa fa-unlock-alt"></i></a>
                                                        <?php }
                                                        else if($product->status == 0)
                                                        { ?>
                                                            <a href="{{route('product.active',$product->id)}}" class="btn btn-warning" style="color: black"><i class="fa fa-lock"></i></a>
                                                        <?php } ?>
                                                    </td>

                                                    <td><a href="{{route('product.delete',$product->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

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
