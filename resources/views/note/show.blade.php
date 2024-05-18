@extends('layouts.app')

@section('content')
    <div class="p-6 bg-white rounded shadow">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl py-4">Note: {{ $note->created_at }}</h1>
            <div class="flex">
                <a href="{{ route('note.edit', $note) }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST" class="ml-2">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                </form>
            </div>
        </div>
        <div class="mt-4 p-6 bg-gray-100 rounded shadow">
            <div>
                {{ $note->note }}
            </div>
        </div>
    </div>
@endsection
