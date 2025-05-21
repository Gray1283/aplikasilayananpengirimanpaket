@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Dashboard Admin</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white shadow-md rounded-xl p-4">
        <h2 class="text-lg font-semibold text-gray-700">Total Pengiriman</h2>
        <p class="text-2xl font-bold text-blue-600 mt-2">1,204</p>
    </div>
    <div class="bg-white shadow-md rounded-xl p-4">
        <h2 class="text-lg font-semibold text-gray-700">Paket Dalam Proses</h2>
        <p class="text-2xl font-bold text-yellow-500 mt-2">58</p>
    </div>
    <div class="bg-white shadow-md rounded-xl p-4">
        <h2 class="text-lg font-semibold text-gray-700">Paket Terkirim</h2>
        <p class="text-2xl font-bold text-green-600 mt-2">1,146</p>
    </div>
</div>
@endsection
