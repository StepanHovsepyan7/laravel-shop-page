@extends('layouts.app')
@section('title', 'Product')

@section('content')

<img src="{{ asset($product->image) }}"  alt={{ $product->name}}>
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>

@endsection