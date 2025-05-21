@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Daftar Produk</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Produk 1 -->
    <div class="bg-white shadow-md rounded-xl p-4">
        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover rounded">
        <h2 class="text-lg font-semibold mt-2">Box Kecil</h2>
        <p class="text-gray-600">Cocok untuk barang ringan dan kecil.</p>
        <span class="text-blue-600 font-bold mt-1 block">Rp10.000</span>
    </div>

    <!-- Produk 2 -->
    <div class="bg-white shadow-md rounded-xl p-4">
        <img src="https://via.placeholder.com/150" alt="Produk 2" class="w-full h-40 object-cover rounded">
        <h2 class="text-lg font-semibold mt-2">Box Sedang</h2>
        <p class="text-gray-600">Cocok untuk paket standar.</p>
        <span class="text-blue-600 font-bold mt-1 block">Rp20.000</span>
    </div>

    <!-- Produk 3 -->
    <div class="bg-white shadow-md rounded-xl p-4">
        <img src="https://via.placeholder.com/150" alt="Produk 3" class="w-full h-40 object-cover rounded">
        <h2 class="text-lg font-semibold mt-2">Box Besar</h2>
        <p class="text-gray-600">Kapasitas besar untuk barang berat.</p>
        <span class="text-blue-600 font-bold mt-1 block">Rp35.000</span>
    </div>
</div>
@endsection
