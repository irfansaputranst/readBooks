@extends('layouts.layouts')

@section('Content')
    {{-- Start Hero Image --}}
    <section id="">
        <div class="lg:flex lg:px-0 lg:py-10 xl:px-24 lg:items-center">
            <figure class="px-5 pt-10 order-2 max-w-[60rem] lg:max-w-2xl">
                <img class="h-auto max-w-full rounded-xl overflow-hidden md:flex md:justify-center md:items-center lg:pl-20 lg:px-5"
                    src="{{ asset('assets/images/images.1.png') }}" alt="image description">
            </figure>
            <div class="lg:block lg:pl-3">
                <div class="px-5 pt-5">
                    <h1 class="bg-green-100 font-montserrat p-3 w-[9rem] text-center rounded-md">#1 in Indonesia</h1>
                    <h1
                        class="pt-3 text-[2rem] font-montserrat font-bold text-white sm:text-[3.5rem] lg:text-[2.5rem] xl:text-[3.5rem]">
                        The Larges Seller Books In Indonesia</h1>
                    <h5 class="pt-3 text-[1rem] font-montserrat text-white sm:text-[1.2rem] lg:text-[1rem]">You can
                        find
                        hundreds of books from various publishers here.</h5>
                </div>
                <form class="px-5 pt-5">
                    <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-5 text-sm border border-white rounded-lg bg-transparent placeholder-white"
                            placeholder="Search Books" required>
                        <div class="absolute inset-y-0 end-5 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                    </div>
                </form>
                <div class="px-5 pt-5">
                    <button
                        class="mr-3 font-montserrat text-green-900 rounded hover:font-bold duration-500 bg-green-100 px-4 py-2">Join
                        for Free</button>
                    <button
                        class="font-montserrat text-white border-2 rounded hover:font-bold duration-500 bg-transparent px-4 py-2">Browse
                        Book</button>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Image --}}

    {{-- Start Choose Image --}}
    <section id="" class="mt-10 h-screen md:h-[40rem] md:mb-[45rem] lg:mb-0 xl:px-28 lg:px-2">
        <div class="px-5 pt-10">
            <div class="bg-green-100 w-[17rem] h-[3rem] flex items-center pl-5 rounded-md">
                <div class="w-[0.9rem] h-[0.9rem] rounded-full bg-green-900"></div>
                <h3 class="ml-5 font-montserrat text-green-900 font-normal">Why choose readbooks</h3>
            </div>
            <h3
                class="font-montserrat text-[2rem] mt-5 font-medium text-white md:text-[3rem] lg:pr-[35rem] lg:text-[2.5rem]">
                Best way to manage for your reading life</h3>
            <h3 class="font-montserrat text-[0.9rem] mt-2 font-light text-white md:text-[1rem] lg:pr-[35rem]">Track
                your experiences from reading books, target achievements from books, and keep exploring.</h3>

            <div class="block lg:flex">
                <div class="pt-20 text-center">
                    <i class="fa-solid fa-magnifying-glass text-white text-[3rem] md:text-[4rem] lg:text-[2rem]"></i>
                    <h3 class="font-montserrat text-[2rem] mt-5 font-bold text-white md:text-[3rem] lg:text-[2rem]">
                        Book Discovery</h3>
                    <h3
                        class="px-10 md:px-36 font-montserrat text-[0.9rem] mt-2 font-light text-white md:text-[1.2rem] lg:text-[0.9rem] lg:px-5">
                        Discover new books to read based on your interests, reading the history, and the recommendations
                        of the other users</h3>
                </div>
                <div class="pt-20 text-center">
                    <i class="fa-solid fa-dollar-sign text-white text-[3rem] md:text-[4rem] lg:text-[2rem]"></i>
                    <h3 class="font-montserrat text-[2rem] mt-5 font-bold text-white md:text-[3rem] lg:text-[2rem]">
                        Sell Your Books</h3>
                    <h3
                        class="px-10 md:px-36 font-montserrat text-[0.9rem] mt-2 font-light text-white md:text-[1.2rem] lg:text-[0.9rem] lg:px-5">
                        If you have a book, you can sell it for a high price here. And can improve your reputation as a
                        writer</h3>
                </div>
                <div class="pt-20 text-center">
                    <i class="fa-solid fa-star text-white text-[3rem] md:text-[4rem] lg:text-[2rem]"></i>
                    <h3 class="font-montserrat text-[2rem] mt-5 font-bold text-white md:text-[3rem] lg:text-[2rem]">
                        Book Reviews</h3>
                    <h3
                        class="px-10 md:px-36 font-montserrat text-[0.9rem] mt-2 font-light text-white md:text-[1.2rem]  lg:text-[0.9rem] lg:px-5">
                        You can write reviews of books that
                        you’ve read and share your thoughts
                        with other ReadBooks users.</h3>
                </div>
            </div>
        </div>
    </section>
    {{-- End Choose Image --}}

    {{-- Start Best Website --}}
    <section id="">
        <div class="lg:flex lg:px-0 xl:px-24 lg:items-center md:mt-20 lg:mt-0 lg:py-0">
            <div class="px-5 order-2">
                <img src="{{ asset('assets/images/images.2.png') }}"
                    class="md:flex md:justify-center md:items-center md:w-[100rem] lg:w-[80rem] lg:pl-20 lg:px-5 rounded-xl overflow-hidden"
                    alt="">
            </div>
            <div class="lg:block lg:pl-3">
                <div class="px-5 pt-5">
                    <div class="bg-green-100 w-[17rem] h-[3rem] flex items-center pl-5 rounded-md">
                        <div class="w-[0.9rem] h-[0.9rem] rounded-full bg-green-900"></div>
                        <h3 class="ml-5 font-montserrat text-green-900 font-normal">Best website in Indonesia</h3>
                    </div>
                    <h3 class="font-montserrat text-[1.5rem] mt-5 font-medium text-white md:text-[3rem] lg:text-[2.5rem]">
                        The best way to discover, track,
                        and share your reading life</h3>
                    <h3 class="font-montserrat text-[0.6rem] mt-2 font-light text-white md:text-[1rem]">From
                        discovering new books to tracking your reading progress
                        to connecting with other readers. ReadBooks has everthing you need
                        to manage reading life. Books to tracking your reading progress.</h3>
                </div>
                <div class="px-5 pt-5">
                    <button
                        class="font-montserrat text-white border-2 rounded hover:font-bold duration-500 bg-transparent px-4 py-2">Join
                        for Free</button>
                </div>
            </div>
        </div>
    </section>
    {{-- End Best Website --}}

    {{-- Start Popular Books --}}
    <section id="" class="h-max pt-10 lg:px-3 xl:px-28 mb-10">
        <div class="flex justify-between p-5">
            <div class="flex items-center rounded-md">
                <div class="w-[0.5rem] h-[0.5rem] rounded-full bg-white"></div>
                <h3 class="ml-3 font-montserrat text-white text-lg md:text-2xl">Popular Books</h3>
            </div>
            <div class="hidden md:flex md:gap-3">
                <a href="#" class="group text-white font-montserrat hover:font-bold transition duration-300">
                    Featured Books
                    <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white"></span>
                </a>
                <a href="#" class="group text-white font-montserrat hover:font-bold transition duration-300">
                    New Arrival
                    <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white"></span>
                </a>
                <a href="#" class="group text-white font-montserrat hover:font-bold transition duration-300">
                    Most Viewed
                    <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white"></span>
                </a>
            </div>
            <div class="md:hidden">
                <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500"
                    data-dropdown-trigger="hover"
                    class="bg-green-100 text-green-900 font-montserrat rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">View All<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownDelay" class="z-10 hidden bg-white divide-gray-100 rounded-lg shadow w-32">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-green-100 font-montserrat">Featured
                                Product</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-green-100 font-montserrat">New
                                Arrival</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-green-100 font-montserrat">Most
                                Viewed</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 gap-3 lg:gap-8">
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 9.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-900 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Popular Books --}}

    {{-- Start Best Seller --}}
    <section id="" class="h-max w-full bg-green-900 lg:px-3 xl:px-28 pt-10 pb-10">
        <div class="flex justify-between p-5">
            <div class="flex items-center rounded-md">
                <div class="w-[0.5rem] h-[0.5rem] rounded-full bg-white"></div>
                <h3 class="ml-3 font-montserrat text-white text-lg md:text-2xl">Popular Books</h3>
            </div>
            <div class="flex items-center rounded-md">
                <a href="#" class="mr-3 font-montserrat text-white text-md group hover:font-bold">View All</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="17" height="17"
                    viewBox="0 0 17 17" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.50002 8.13149C1.50002 8.2641 1.5527 8.39128 1.64647 8.48504C1.74024 8.57881 1.86741 8.63149 2.00002 8.63149H13.793L10.646 11.7775C10.5521 11.8714 10.4994 11.9987 10.4994 12.1315C10.4994 12.2643 10.5521 12.3916 10.646 12.4855C10.7399 12.5794 10.8672 12.6321 11 12.6321C11.1328 12.6321 11.2601 12.5794 11.354 12.4855L15.354 8.48549C15.4006 8.43904 15.4375 8.38387 15.4627 8.32312C15.4879 8.26238 15.5009 8.19726 15.5009 8.13149C15.5009 8.06572 15.4879 8.0006 15.4627 7.93986C15.4375 7.87911 15.4006 7.82394 15.354 7.77749L11.354 3.77749C11.3075 3.731 11.2523 3.69413 11.1916 3.66897C11.1309 3.64381 11.0658 3.63086 11 3.63086C10.8672 3.63086 10.7399 3.6836 10.646 3.77749C10.5521 3.87138 10.4994 3.99872 10.4994 4.13149C10.4994 4.26427 10.5521 4.3916 10.646 4.48549L13.793 7.63149L2.00002 7.63149C1.86741 7.63149 1.74024 7.68417 1.64647 7.77794C1.5527 7.87171 1.50002 7.99888 1.50002 8.13149Z"
                        fill="white" />
                </svg>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 gap-3 lg:gap-8">
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 12.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-600 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-md">
                <a href="#">
                    <img class="rounded-xl" src="{{ asset('assets/images/Rectangle 12.png') }}" alt="product image" />
                </a>
                <div class="pb-5 pt-3">
                    <a href="#">
                        <h5 class="text-2xl font-semibold font-montserrat text-white">Kedamaian</h5>
                        <h5 class="text-base font-light font-montserrat text-white">Riki Santo</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-4 h-4 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">4.11</span>
                        <i class="fa-solid fa-eye text-yellow-300"></i>
                        <span class="font-montserrat text-base text-white font-semibold px-2.5 py-0.5 rounded ">1.300
                            view</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-base font-montserrat font-bold text-white">Rp. 25.000</span>
                        <a href="#"
                            class="text-[0.7rem] font-montserrat text-white rounded-full border-white border p-2 hover:font-bold duration-500 hover:bg-green-600 hover:border-none">Add
                            to cart</a>
                    </div>
                </div>
            </div>
    </section>
    {{-- End Best Seller --}}


    {{-- Start Review --}}
    <section id="" class="h-max w-full lg:px-3 xl:px-28 pt-10 pb-10">
        <div class="">
            <div class="bg-green-100 w-[9rem] h-[3rem] flex items-center pl-5 rounded-md mx-auto">
                <div class="w-[0.9rem] h-[0.9rem] rounded-full bg-green-900"></div>
                <h3 class="ml-5 font-montserrat text-green-900 font-normal">Reviews</h3>
            </div>
            <h3 class="mt-5 text-center font-montserrat text-white font-normal text-lg mb-5">See What Our Users Have To
                Say
            </h3>
            <div class="flex items-center gap-4 flex-col md:grid md:grid-cols-2 md:p-5 lg:grid lg:grid-cols-3">
                <a href="#" class="block max-w-sm p-6 border-4 border-gray-200 rounded-lg shadow">
                    <p class="font-normal text-white text-sm font-montserrat mb-5">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <h5 class="text-lg font-bold tracking-tight text-white font-montserrat">
                        Irfan Saputra Nst</h5>
                    <p class="font-normal text-white text-xs font-montserrat">Graphic Design</p>
                </a>
                <a href="#" class="block max-w-sm p-6 border-4 border-gray-200 rounded-lg shadow">
                    <p class="font-normal text-white text-sm font-montserrat mb-5">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <h5 class="text-lg font-bold tracking-tight text-white font-montserrat">
                        Irfan Saputra Nst</h5>
                    <p class="font-normal text-white text-xs font-montserrat">Graphic Design</p>
                </a>
                <a href="#" class="block max-w-sm p-6 border-4 border-gray-200 rounded-lg shadow">
                    <p class="font-normal text-white text-sm font-montserrat mb-5">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <h5 class="text-lg font-bold tracking-tight text-white font-montserrat">
                        Irfan Saputra Nst</h5>
                    <p class="font-normal text-white text-xs font-montserrat">Graphic Design</p>
                </a>
                <a href="#" class="block max-w-sm p-6 border-4 border-gray-200 rounded-lg shadow">
                    <p class="font-normal text-white text-sm font-montserrat mb-5">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <h5 class="text-lg font-bold tracking-tight text-white font-montserrat">
                        Irfan Saputra Nst</h5>
                    <p class="font-normal text-white text-xs font-montserrat">Graphic Design</p>
                </a>
            </div>
            <div class="flex items-center justify-center mt-10 gap-3">
                <!-- Previous Button -->
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white border border-gray-300 rounded-lg hover:bg-white hover:text-green-900">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                    </svg>
                </a>

                <!-- Next Button -->
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white border border-gray-300 rounded-lg hover:bg-white hover:text-green-900">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- End Review --}}
@endsection
