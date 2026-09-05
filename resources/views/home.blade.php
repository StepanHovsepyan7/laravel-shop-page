@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
  <x-trending-slider />
  <x-products :products="$products" />
</main>
@endsection