@extends('index')

@section('content')
<div class="h-[calc(100vh_-_5rem)] sm:h-[calc(100vh_-_102px)] overflow-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 place-items-center mt-10 px-5">
        @foreach ($sessions as $item)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md mb-5">
            <a href="#">
                <img class="rounded-t-lg" src={{asset('storage/coverImages/'.$item->coverImage)}}
                alt={{$item->coverImage}} />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$item->name}}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">{{$item->body}}</p>
                <div class="flex justify-between">
                    <a href="#"
                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Read more
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <span
                        class="bg-cyan-100 text-cyan-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-full mr-2">
                        <svg class="mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{$item->date}}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection