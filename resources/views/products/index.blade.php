@extends('products.layout')

@section('content')
<div class="row"> 
<div class="col-lg-12 margin-tb">
    <div class="pull-left"> 
        <h2>laravel 10 Crud</h2>
    </div> 
    <div class="pull-right"> 
        <a class="btn btn-success" href="{{route('product.create')}}"> Create New Product</a>
    </div>
</div>
</div>
@if($message = Session::get('success'))
<div class="alet alert-success">
    <p>{{$message}}</p> 

</div>
@endif

<table class="tale table-bordered">
    <tr> 
        <th>NO</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr> 
    @foreach ($product as $product)

    <tr> 
        <td>{{++$i}}</td>
        <td>{{$product->name }}</td>
        <td> {{$product->details}}</td>
        <td> 
            <form action="" method="post"> 
                <a class="btn btn-info" href="{{route('products.show',$product-id)}}">Show</a>
                <a class="btn btn-primary " href="{{route('products.edit',$product->id)}}">Edit</a>

                @csrf 
                @method('Delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
</table>

{!! $products->links() !!}

 @endsection() 
