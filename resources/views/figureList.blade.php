@extends('layouts.main')
@section('navbar')
    @include('partials.navbar_tim6')
@endsection
@section('container')
    @php
        $i = 1;
    @endphp
    <div class="table-section">
        <table>
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Nama Anime</th>
                    <th scope="col">Tipe Figure</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody>
                    @foreach($produks as $produk)
                    <tr>
                        <td>{{ $i }}</td>
                        {{-- <td>
                            <a class="table-link" href="/devices/{{ $produk["id"] }}">{{ $produk["id"] }}</a>
                        </td> --}}
                        <td>{{ $produk["id"] }}</td>
                        <td>{{ $produk["nama"] }}</td>
                        <td>{{ $produk["anime"] }}</td>
                        <td>{{ $produk["tipe"] }}</td>
                        <td>Rp {{ $produk["harga"] }}</td>
                        <td>{{ $produk["deskripsi"] }}</td>
                        <td>
                            <a href="updateFigure/{{$produk["id"]}}">UPDATE</a>
                            <a href="deleteFigure/{{$produk["id"]}}">DELETE</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
@endsection
