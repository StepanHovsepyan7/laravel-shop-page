@extends('layouts.app')

@section('title', 'Գլխավոր')

@section('content')
  <main>
    <x-trending-slider/>
    <h2>Բարի գալուստ, {{ $username }}</h2>
  </main>
@endsection