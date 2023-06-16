@extends('layouts.base')
 
@section('title', 'Homepage')
 
@section('content')
    <main class="flex justify-center pt-5">
        
        <div class="relative overflow-x-auto w-4/5 bg-white rounded-lg m-2 p-2">
            <div>
                <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl ">Book manager</h2>
            </div>
            <div class="mb-5">
                <a href="{{ url('books/create') }}"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                    Create New Book
                </a>
            </div>
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Author</th>
                        <th scope="col" class="px-6 py-3">Publication year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="bg-gray-100 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$book->id}}</th>
                            <td class="px-6 py-4">{{$book->title}}</td>
                            <td class="px-6 py-4">{{$book->author}}</td>
                            <td class="px-6 py-4">{{$book->publication_year}}</td>
                            <td class="px-6 py-4">
                                <form method="POST" action="{{ url('books/'.$book->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                            type="submit" >Delete</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url('books/'.$book->id.'/edit')}}" >
                                    <span class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                         Edit
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection