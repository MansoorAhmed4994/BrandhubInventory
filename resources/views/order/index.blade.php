@extends('layouts.app')

@section('content')


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Customer Id</th>
      <th scope="col">Product Id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  
  @foreach($order as $orders)
  <tbody>
    <tr>
    
      <td>{{$orders->customer_id}}</td>
      <td>{{$orders->product_id}}</td>
      <td>{{$orders->quantity}}</td>

       
      <td><a href="{{route('order.edit', $orders->id)}}" class="btn btn-primary mr-2">Edit</a><!--<button type="submit" class="btn btn-danger">Delete</button></td>-->
       
        <form action="{{route('order.delete', $orders->id)}}" method="post">

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