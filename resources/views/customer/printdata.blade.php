@extends('layouts.app')

@section('content')

@foreach($customer as $customers)
<div class="container ">
<table class="table table-responsive table-bordered" style="width:100%;">
  
  <h1 class="table-dark">BrandHub</h1>
  
  <tbody>
    
    <tr>
        <td>Name</td>
        
        <td class="tabledwidth tabledesign">{{$customers->first_name}}</td>
    </tr>
    
    <tr>
        <td>Number</td>
        <td>{{$customers->number}}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{$customers->address}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{$customers->description}}</td>
    </tr>
    
    <tr>
        <td>From</td>
        <td>DHA Phase V, Tauheed Comm. Area, 28th Street, Karachi Pakistan</td>
    </tr>

    <tr>
        <td class="table-dark">Website</td>
        <td class="table-dark">www.brandhub.com.pk</td>
    </tr>

    <tr>
        <td class="table-dark">Social Media</td>
        <td class="table-dark">instagram/brandhub994 Facebook/brandhub000</td>
    </tr>

    <tr>
        <td>Contact</td>
        <td>03362240865/02137227405</td>
    </tr>

    
  </tbody>
</table>
</div>
@endforeach


@endsection