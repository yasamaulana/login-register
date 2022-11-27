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
            <livewire:auth.login-user>
        </div>
    </div>
    @livewireScripts
</body>

</html>