<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 8px;
            margin: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 200px; /* Menentukan lebar kartu */
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
            margin-bottom: 8px;
        }
        .product-card h3 {
            margin: 0 0 8px;
            font-size: 1.2em;
        }
        .product-card p {
            margin: 0 0 4px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<h1>Product List</h1>
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

</body>
</html>
