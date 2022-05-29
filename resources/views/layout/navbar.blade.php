<nav x-data="{ open: false }"
    class="fixed top-0 left-0 right-0 bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded  border-b-2">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home')}}" class="flex items-center">
            <img src="{{ asset('android-chrome-512x512.png')}}" class="h-14 sm:h-20" alt="Flowbite Logo">
            <span style="font-family: 'Dosis', sans-serif;"
                class="self-center text-2xl sm:text-4xl font-semibold whitespace-nowrap ">Front
                End</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('sessionIndex')" :active="request()->routeIs('sessionIndex')">
                        {{ __('Sessions') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link>
                        {{ __('Reference') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link>
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="h-20 sm:h-[calc(102px)]">

</div>