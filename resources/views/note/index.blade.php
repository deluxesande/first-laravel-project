@extends('layouts.app')

@section('content')
    <a href="{{ route('note.create') }}" class="bg-green-500 hover:bg-green-400 text-black font-bold py-2 px-4 rounded">New
        Note</a>
    @foreach ($notes as $note)
        <div class="p-4 bg-slate-50 border rounded shadow-md my-6">
            <div class="mb-4">
                {{ Str::words($note->note, 30) }}
            </div>
            <div class="flex justify-between space-x-4">
                <a href="{{ route('note.show', $note) }}"
                    class="bg-blue-500 hover:bg-blue-400 text-black font-bold py-2 px-4 rounded">View</a>
                <a href="{{ route('note.edit', $note) }}"
                    class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-400 text-black font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

    {{ $notes->links() }}
@endsection
