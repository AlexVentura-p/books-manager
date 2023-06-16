@extends('layouts.base')
 
@section('title', 'Homepage')
 
@section('content')
    <main class="flex justify-center pt-5">
        
        <div class="relative overflow-x-auto w-3/4 bg-white rounded-lg m-2 p-2">
            <div>
                <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl ">
                    Edit book
                </h2>
            </div>
            <form method="POST" action={{ url('books/'.$book->id)}} >
                @method('PUT')
                @csrf
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input value="{{$book->title}}" type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600" required>
                </div>
                <div class="mb-5">
                    <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                    <input value="{{$book->author}}"  type="text" name="author" id="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600" required>
                </div>
                <div class="mb-5">
                    <label for="publication_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Publication year</label>
                    <input value="{{$book->publication_year}}" type="number" name="publication_year" id="publication_year" min="0" max="2023" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>
            @if ($errors->any())
                <div>
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>
@endsection