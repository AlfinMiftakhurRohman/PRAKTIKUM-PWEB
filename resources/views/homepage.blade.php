@extends('components.template')

@section('title', 'Homepage')

@section('content')
<div class="min-h-screen bg-blue-50 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">welcome di contact sederhana</h1>
        <p class="text-gray-700 mb-8">Manage contactmu dengan lebih efisien cuy</p>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-6">
            <table class="min-w-full bg-white border border-gray-200 rounded-md">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">No.</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="border-b border-gray-200 hover:bg-blue-100 transition duration-200">
                            <td class="py-4 px-6">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6">{{ $contact['name'] }}</td>
                            <td class="py-4 px-6">{{ $contact['email'] }}</td>
                            <td class="py-4 px-6">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

       
    </div>
</div>
@endsection