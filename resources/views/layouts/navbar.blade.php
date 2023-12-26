{{-- Start Navbar --}}
<nav class="bg-green-900 shadow-xl border-gray-200 py-5 md:px-5 lg:px-5 xl:px-28">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{ asset('assets/images/readbooks.png') }}" class="w-32" alt="">
        </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>

            <button>
                <a href="/login"
                    class="mr-8 font-montserrat text-white hover:font-bold duration-500 hidden lg:flex">Login</a>
            </button>
            <button> <a href="/register"
                    class="text-green-900 hidden lg:flex bg-green-100 hover:bg-green-600 hover:font-bold font-montserrat hover:text-white focus:ring-4 duration-500 font-normal rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 focus:outline-none ">Sign
                    Up</a>
            </button>

            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden"
                aria-controls="mobile-menu-2" aria-expanded="true">
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
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1 lg:mt-2" id="mobile-menu-2">
            <ul class="flex flex-col mt-5 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li class="pb-3">
                    <a href="#"
                        class="font-bold font-montserrat text-white lg:bg-transparent lg:p-0 lg:hover:text-green-300"
                        aria-current="page">Home</a>
                </li>
                <li class="pb-3">
                    <a href="#"
                        class="font-bold font-montserrat text-white lg:bg-transparent lg:p-0 lg:hover:text-green-300"
                        aria-current="page">About Us</a>
                </li>
                <li class="pb-3">
                    <button type="button"
                        class="flex items-center w-full text-base text-white hover:text-green-300 font-montserrat font-bold transition duration-75 rounded-lg group"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1 text-left rtl:text-right">Categories</span>
                        <svg class="w-5 h-5 p-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <ul id="dropdown-example" class="hidden mt-3 lg:absolute lg:bg-white lg:px-3 lg:py-3 lg:rounded-lg">
                        <div
                            class="border-l-[10px] border-l-transparent
                    border-b-[10px] border-b-white
                    border-r-[10px] border-r-transparent absolute -mt-5 ml-4 hidden lg:flex">
                        </div>
                        <li>
                            <a href="#"
                                class="flex items-center w-full text-white font-normal font-montserrat transition duration-75 rounded-lg pl-5 group lg:hover:font-bold lg:text-green-900 lg:pl-0">Billing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full text-white font-normal font-montserrat transition duration-75 rounded-lg pl-5 group lg:hover:font-bold lg:text-green-900 lg:pl-0">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a href="#"
                        class="font-bold font-montserrat text-white lg:hover:bg-transparent lg:border-0 lg:hover:text-green-300 lg:p-0">MyBooks</a>
                </li>
                <li>
                    <a href="#"
                        class="font-bold font-montserrat text-white lg:hover:bg-transparent lg:border-0 lg:hover:text-green-300 lg:p-0">Contact</a>
                </li>
            </ul>
            <div class="border-t lg:border-none mt-6">
                <button>
                    <a href="#"
                        class="mt-5 mr-3 font-montserrat text-white hover:font-bold duration-500 flex lg:hidden">Login</a>
                </button>
                <button>
                    <a href="https://themesberg.com/product/tailwind-css/landing-page"
                        class="text-green-900 block lg:hidden bg-green-100 hover:bg-green-600 hover:font-bold font-montserrat hover:text-white focus:ring-4 duration-500 font-normal rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 lg:mr-0 focus:outline-none">Sign
                        Up</a>
                </button>
            </div>
        </div>
    </div>
</nav>
{{-- End Navbar --}}