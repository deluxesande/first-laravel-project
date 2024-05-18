@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-200 border-0">
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        <h6 class="text-xl font-semibold">Page Not Found</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                            We're sorry, but the page you were looking for doesn't exist.
                        </p>
                        <div class="text-center mt-6">
                            <a href="{{ route('note.index') }}"
                                class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                type="button" style="transition: all 0.15s ease 0s;">
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
