@extends('layouts.main')
@section('navbar')
    @include('partials.navbar_hansel')
@endsection
@section('container')
@if($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
@endif

<div class="product-container">
    @foreach ($products as $product)
    <div class="product-card">
        <img src="{{ $product['gambar'] }}" alt="{{ $product['nama'] }}">
        <h3>{{ $product['nama'] }}</h3>
        <p>{{ $product['deskripsi'] }}</p>
        <p><strong>Harga: </strong>{{ $product['harga'] }}</p>
        <p><strong>ID: </strong>{{ $product['id'] }}</p>
    </div>
    @endforeach
</div>
@endsection
