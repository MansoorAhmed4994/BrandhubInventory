@extends('layouts.app')

@section('content')


<form action="{{route('customer.printdata')}}" method="post">
      @csrf
      <input type="text" id="customerids" name="customerids"/>
      <button type="submit" class="btn btn-danger">Print</button>

    </form>

<table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Check Box</th>
      <th scope="col">First Name</th>
      <th scope="col">Number</th>
      <th scope="col">Description</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  
  @foreach($customer as $customers)
  <tbody>
    <tr>
      
      <td><input type="checkbox" value="{{$customers->id}}" name="customer_id[]" onchange='handleChange(this)'  data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
      
      </td>
      <td>{{$customers->first_name}}</td>
      <td>{{$customers->number}}</td>
      <td>{{$customers->description}}</td>
      <td>{{$customers->address}}</td>

       
      <td><a href="{{route('customer.edit', $customers->id)}}" class="btn btn-primary mr-2">Edit</a><!--<button type="submit" class="btn btn-danger">Delete</button></td>-->
       
        <form action="{{route('customer.delete', $customers->id)}}" method="post">

          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Delete</button>

        </form>

      </td>
       
      
    </tr>
    @endforeach
 

    
  </tbody>
</table>
<div id="demo"></div>


@endsection