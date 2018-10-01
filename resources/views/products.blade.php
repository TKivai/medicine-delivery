@extends('layouts.layouts')

@section('content')
    <div>
        @foreach ($products as $product)
        <div style="border:2px solid">
            <p>{{$product->description}}</p><br>
            <p>{{$product->product_name}}</p><br>
            <p>{{$product->price}}</p><br>
            <p>{{$product->features}}</p><br>
        </div>
            
        @endforeach
    </div>
@endsection