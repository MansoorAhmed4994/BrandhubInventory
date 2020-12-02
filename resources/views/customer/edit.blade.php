@extends('layouts.app')

@section('content')
 
<form action="{{route('customer.update', $customer->id)}}" method="post">
@csrf
{{method_field('PUT')}}
    <div class="container col-sm-4">
    <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{$customer->first_name}}" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="First Name">

            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        

        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" class="form-control @error('number') is-invalid @enderror" value="{{$customer->number}}" name="number" id="number" value="{{old('number')}}" placeholder="Number">

            @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{$customer->description}}" id="description" name="description" value="{{old('description')}}" placeholder="Description">

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{$customer->address}}" name="address" id="address" value="{{old('address')}}" placeholder="Address">

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>


@endsection