@extends('layouts.app')

@section('content')
 
<form action="{{route('product.update', $product->id)}}" method="post">
@csrf
    <div class="container col-sm-4">
    <div class="form-group">
            <label for="name">Barcode</label>
            <input type="text" class="form-control @error('barcode') is-invalid @enderror" value="{{$product->barcode}}" id="barcode" name="barcode" placeholder="Barcode">

            @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="tag_price">Tag Price</label>
            <input type="text" class="form-control @error('tag_price') is-invalid @enderror" value="{{$product->tag_price}}" name="tag_price" id="tag_price" placeholder="Tag Price">

            @error('tag_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cost_price">Cost Price</label>
            <input type="text" class="form-control @error('cost_price') is-invalid @enderror" value="{{$product->cost_price}}" name="cost_price" id="cost_price" placeholder="Cost Price">

            @error('cost_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{method_field('PUT')}}

        <div class="form-group">
            <label for="sell_price">Sell Price</label>
            <input type="text" class="form-control @error('sell_price') is-invalid @enderror" value="{{$product->sell_price}}" name="sell_price" id="sell_price" placeholder="Sell Price">

            @error('sell_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control @error('quantity') is-invalid @enderror" value="{{$product->quantity}}" name="quantity" id="quantity" placeholder="Quantity">

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