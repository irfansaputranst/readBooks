<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .btn {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
        }

        /* Style the active class, and buttons on mouse-over */
        .active,
        .btn:hover {
            background-color: #14532d;
            color: white;
            border-radius: 0.375rem;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="h-screen flex align-middle content-center items-center justify-center overflow-hidden">
        <div class="w-1/2 lg:w-1/3 h-max rounded-2xl">
            <div class="flex items-center justify-center">
                <img src="{{ asset('assets/images/readbooks.png') }}" class="w-80 pt-10" alt="">
            </div>
            <div class="w-full flex justify-center p-2 mt-10 bg-white rounded-md mb-4" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <div class="w-1/2 rounded-s-md active" role="presentation">
                    <input id="default-radio-1" type="radio" value="" name="default-radio"
                        class="hidden peer btn active" id="profile-tab" data-tabs-target="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">
                    <label for="default-radio-1"
                        class="px-5 py-2 rounded-md text-xl flex justify-center cursor-pointer font-montserrat peer-checked:bg-green-900 peer-checked:text-white peer-checked:font-bold duration-300">Login</label>
                </div>
                <div class="w-1/2 rounded-s-md" role="presentation">
                    <input id="default-radio-2" type="radio" value="" name="default-radio"
                        class="hidden peer btn active" id="dashboard-tab" data-tabs-target="#dashboard" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                    <label for="default-radio-2"
                        class="px-5 py-2 rounded-md text-xl font-normal text-gray-900 flex justify-center cursor-pointer font-montserrat peer-checked:bg-green-900 peer-checked:text-white peer-checked:font-bold duration-300">Register</label>
                </div>
            </div>
            <div id="default-tab-content" class="h-max">
                @if (session()->has('error'))
                    <div id="alert-2"
                        class="flex items-center w-max absolute p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        {{ session('error') }}
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">{{ __('Errors') }}</span>
                        <div class="ms-3 mr-1 text-sm font-medium">
                            {{ __('Your Email or Password is Wrong! Please Try Again') }}
                        </div>
                        <button type="button"
                            class="ms-auto mx-0.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">{{ __('Close') }}</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <div class="hidden p-4 pb-5 rounded-md border" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <h1 class="font-montserrat font-bold text-4xl text-white mb-2">Login</h1>
                    <p class="font-montserrat font-normal text-sm text-gray-300">Login to your account</p>
                    <form method="post" action="/">
                        @csrf
                        <div class="mt-5">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-white font-montserrat">Email</label>
                            <input type="text" name="email" id="email"
                                aria-describedby="helper-text-explanation"
                                class="bg-green-600 border text-white font-montserrat text-sm rounded-lg focus:outline-none focus:border-green-100 focus:ring-green-100 focus:ring-1 block w-full p-2.5 placeholder-gray-300 @error('email') is-invalid @enderror"
                                placeholder="youremail@gmail.com" required>
                            @error('email')
                                <p id="filled_error_help" class="bg-red-900 p-2 rounded mt-2 text-xs text-white"><span
                                        class="font-medium">{{ __('Whoops! Something went wrong.') }}</span>
                                @enderror
                        </div>
                        <div class="mt-5">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-white font-montserrat">Password</label>
                            <input type="password" id="password"
                                class="bg-green-600 border text-white font-montserrat text-sm rounded-lg focus:outline-none focus:border-green-100 focus:ring-green-100 focus:ring-1 block w-full p-2.5 placeholder-gray-300 @error('password') is-invalid @enderror"
                                placeholder="•••••••••" required>
                            @error('email')
                                <p id="filled_error_help" class="bg-red-900 p-2 rounded mt-2 text-xs text-white"><span
                                        class="font-medium">{{ $message }}</span>
                                @enderror
                        </div>
                        <button type="submit"
                            class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
                <div class="hidden p-4 rounded-md border dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <h1 class="font-montserrat font-bold text-4xl text-white mb-2">Register</h1>
                    <p class="font-montserrat font-normal text-sm text-gray-300">Register for an account and begin
                        using
                        the service.</p>
                    <div class="mt-5">
                        <label for="helper-text"
                            class="block mb-2 text-sm font-medium text-white font-montserrat">Username</label>
                        <input type="username" id="helper-text" aria-describedby="helper-text-explanation"
                            class="bg-green-600 border text-white font-montserrat text-sm rounded-lg focus:outline-none focus:border-green-100 focus:ring-green-100 focus:ring-1 block w-full p-2.5 placeholder-gray-300"
                            placeholder="John Doe" required>
                    </div>
                    <div class="mt-5">
                        <label for="helper-text"
                            class="block mb-2 text-sm font-medium text-white font-montserrat">Email</label>
                        <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                            class="bg-green-600 border text-white font-montserrat text-sm rounded-lg focus:outline-none focus:border-green-100 focus:ring-green-100 focus:ring-1 block w-full p-2.5 placeholder-gray-300"
                            placeholder="youremail@gmail.com" required>
                    </div>
                    <div class="mt-5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-white font-montserrat">Password</label>
                        <input type="password" id="password"
                            class="bg-green-600 border text-white font-montserrat text-sm rounded-lg focus:outline-none focus:border-green-100 focus:ring-green-100 focus:ring-1 block w-full p-2.5 placeholder-gray-300"
                            placeholder="•••••••••" required>
                    </div>
                    <button type="submit"
                        class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </div>
            </div>

        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("default-tab");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</body>

</html>
