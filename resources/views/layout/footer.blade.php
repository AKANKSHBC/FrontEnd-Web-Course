<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 ">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('home')}}" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('android-chrome-512x512.png')}}" class="mr-3 h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">Front End</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 ">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center ">© 2022 <a href="{{route('home')}}"
            class="hover:underline">Front End™</a>. All Rights Reserved.
    </span>
</footer>