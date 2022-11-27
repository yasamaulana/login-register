<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/64c1f5f0e6.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body style="background-color: rgb(234, 234, 234)">
    <div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
        <div class="p-10 space-y-8 bg-white shadow-xl">
            <div>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-center text-gray-900">Sign in to your account
                </h2>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ url('login') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="">Email</label>
                        <input id="email-address" name="email" type="email" autocomplete="email"
                            class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Email address" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-b-md focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Password">
                        @if (session()->has('eror'))
                            <p class="text-sm text-red-500">{{ session('eror') }}</p>
                        @endif
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    Belum punya akun?

                    <div class="text-sm">
                        <a href="/daftar" class="font-medium text-indigo-600 hover:text-indigo-500">Daftar</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg class="w-5 h-5 text-indigo-500 group-hover:text-indigo-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Masuk
                    </button>
                    <a href="/lupa-sandi">
                        <p class="mt-2 text-center text-blue-900">Lupa sandi?</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
    @livewireScripts
</body>

</html>
