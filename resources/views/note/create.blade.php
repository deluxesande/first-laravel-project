<x-layout>
    <div class="p-6 bg-white rounded shadow flex flex-col items-center">
        <h1 class="text-3xl py-4">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="w-full">
            @csrf
            <textarea name="note" rows="10" class="w-full p-2 border rounded shadow" placeholder="Enter your note here"></textarea>
            <div class="flex justify-between mt-4">
                <a href="{{ route('note.index') }}" class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-600">Cancel</a>
                <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</x-layout>