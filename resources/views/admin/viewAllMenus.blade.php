@extends('dashboard.layouts.main')
@section('container')
<br><br>
<center>
    <h1>Menu Makanan dan Minuman</h1>
</center>  
<br><br>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Kategori ID</th>
            <th scope="col">Gambar</th>
        </tr>
    </thead>
    <tbody>
        
        @if ($menus->count())
        @foreach ($menus as $menu) <!-- Ubah $menus menjadi $menu -->
        <tr>
            <td>{{ $menu->id }}</td>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->price }}</td>
            <td>{{ $menu->description }}</td>
            <td>{{ $menu->category_id }}</td>
            <td>{{ $menu->image }}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6" class="text-center">Data Tidak Ditemukan</td>
        </tr>
        @endif
    </tbody>
</table>
<div class="d-flex">
    {{ $menus->links() }}
</div>
@endsection
