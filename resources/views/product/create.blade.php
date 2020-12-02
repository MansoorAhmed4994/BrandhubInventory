@extends('layouts.app')

@section('content')

<form action="{{route('product.store')}}" method="post">
@csrf
    <div class="container col-sm-4">
        <div class="form-group">
            <label for="name">Barcode</label>
            <input type="text" class="form-control @error('barcode') is-invalid @enderror" id="barcode" name="barcode" value="{{old('barcode')}}" placeholder="Barcode">

            @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="tag_price">Tag Price</label>
            <input type="text" class="form-control @error('tag_price') is-invalid @enderror" name="tag_price" id="tag_price" value="{{old('tag_price')}}" placeholder="Tag Price">

            @error('tag_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cost_price">Cost Price</label>
            <input type="text" class="form-control @error('cost_price') is-invalid @enderror" name="cost_price" id="cost_price" value="{{old('cost_price')}}" placeholder="Cost Price">

            @error('cost_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="sell_price">Sell Price</label>
            <input type="text" class="form-control @error('sell_price') is-invalid @enderror" name="sell_price" id="sell_price" value="{{old('sell_price')}}" placeholder="Sell Price">

            @error('sell_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" value="{{old('quantity')}}" placeholder="Quantity">

            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>




@endsection