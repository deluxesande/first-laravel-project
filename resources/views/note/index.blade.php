<x-layout>
    <div class="container mx-auto">
        <a href="{{ route('note.create')}}" class="new-note-btn">New Note</a>
        @foreach ($notes as $note )
            <div class="p-4 bg-slate-50 border rounded shadow-md my-6">
                <div class="mb-4">
                    {{ Str::words($note->note, 30) }}
                </div>
                <div class="flex justify-between bg-red-500">
                    <a href="{{ route('note.show', $note)}}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">View</a>
                    <a href="{{ route('note.edit', $note)}}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">Edit</a>
                    <button class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>