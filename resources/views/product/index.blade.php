@extends('layouts.app')

@section('content')


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Barcode</th>
      <th scope="col">Tag Price</th>
      <th scope="col">Cost Price</th>
      <th scope="col">Sell Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  
  @foreach($product as $products)
  <tbody>
    <tr>
    
      <td>{{$products->barcode}}</td>
      <td>{{$products->tag_price}}</td>
      <td>{{$products->cost_price}}</td>
      <td>{{$products->sell_price}}</td>
      <td>{{$products->quantity}}</td>

       
      <td><a href="{{route('product.edit', $products->id)}}" class="btn btn-primary mr-2">Edit</a><!--<button type="submit" class="btn btn-danger">Delete</button></td>-->
       
        <form action="{{route('product.delete', $products->id)}}" method="post">

          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Delete</button>

        </form>

      </td>
       
      
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection