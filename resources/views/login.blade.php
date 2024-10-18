@extends('components.template')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-blue-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Login</h2>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan email">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan password">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition duration-300">Login</button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600">Belum punya akun? <a href="/register" class="text-blue-600">Daftar di sini</a></p>
        </div>
    </div>
</div>
@endsection
