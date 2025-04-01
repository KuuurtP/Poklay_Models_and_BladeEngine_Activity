@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Books</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-green-200 text-red-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">ISBN</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Author</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-left">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-black-600 text-sm font-light">
                @foreach($books as $book)
                    <tr class="border-b border-blue-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $book->id }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->isbn }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->title }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->author }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->description }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
