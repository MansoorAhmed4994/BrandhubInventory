@extends('layouts.app')

@section('content')
 
<form action="{{route('order.update', $order->id)}}" method="post">
@csrf
{{method_field('PUT')}}
    <div class="container col-sm-4">
    <div class="form-group">
            <label for="exampleFormControlSelect1">Customer Id</label>
            <select class="form-control @error('customer_id') is-invalid @enderror" value="{{$order->customer_id}}" name="customer_id" id="customer_id">

                <option value="1" {{ old('customer_id') == '1' ? 'selected' : '' }}>
                    1
                </option>
                <option value="2" {{ old('customer_id') == '2' ? 'selected' : '' }}>
                    2
                </option>
                <option value="3" {{ old('customer_id') == '3' ? 'selected' : '' }}>
                    3
                </option>
                <option value="4" {{ old('customer_id') == '4' ? 'selected' : '' }}>
                    4
                </option>
            </select>

            @error('customer_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Id</label>
            <select class="form-control @error('product_id') is-invalid @enderror" value="{{$order->product_id}}" name="product_id" id="product_id">

                <option value="1" {{ old('product_id') == '1' ? 'selected' : '' }}>
                    1
                </option>
                <option value="2" {{ old('product_id') == '2' ? 'selected' : '' }}>
                    2
                </option>
                <option value="3" {{ old('product_id') == '3' ? 'selected' : '' }}>
                    3
                </option>
                <option value="4" {{ old('product_id') == '4' ? 'selected' : '' }}>
                    4
                </option>
            </select>

            @error('product_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control @error('quantity') is-invalid @enderror" value="{{$order->quantity}}" name="quantity" id="quantity" value="{{old('quantity')}}" placeholder="Quantity">

            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>


@endsection