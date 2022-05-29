@extends('index')

@section('content')
<div class="h-[calc(100vh_-_5rem)] sm:h-[calc(100vh_-_102px)] bg-slate-50 overflow-auto">
    <div class="block md:flex border h-full">
        <div class="md:self-center md:w-2/5 md:ml-14">
            <div class="text-4xl font-bold mt-20 mb-10 pl-5 leading-10">
                <span>Welcome to</span>
                <span class="text-indigo-600 leading-7 md:block md:py-5" style="font-family: 'Dosis', sans-serif;">
                    Front
                    End Web Development</span><span>
                    Course!</span>
            </div>
            <a href="{{Route('sessionIndex')}}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-base px-5 py-2.5 text-center ml-5 mb-6 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    Started</button>
            </a>
        </div>
        <div>
            <img class="sm:h-full" src="{{asset('images/landing.jpg')}}" alt="image">


            {{-- <div id="tooltip-default" role="tooltip"
                class="inline-block invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                <a href="https://www.freepik.com/vectors/coder">Coder vector created by upklyak - www.freepik.com</a>
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div> --}}
        </div>
    </div>
    @include('layout.footer')
</div>
@endsection