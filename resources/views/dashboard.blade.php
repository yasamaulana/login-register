<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/64c1f5f0e6.js" crossorigin="anonymous"></script>
  @livewireStyles
</head>

<body>
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <livewire:dash-profile>
            </div>
            <div class="hidden md:block">
              <div class="flex items-baseline ml-10 space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/dashboard" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md"
                  aria-current="page">Selamat datang {{ Auth::user()->name }}</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="flex items-center ml-4 md:ml-6">
              <livewire:auth.logout>
            </div>
          </div>
        </div>
      </div>

    </nav>

    <header class="bg-white shadow">
      <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
      </div>
    </header>
    <main>
      <div class="py-6 m-10 mx-auto shadow-xl max-w-7xl sm:px-6 lg:px-8">
        <livewire:foto-profile>
      </div>
    </main>
  </div>
  @livewireScripts
</body>

</html>