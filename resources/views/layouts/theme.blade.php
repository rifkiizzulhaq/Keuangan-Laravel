<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ Auth::user()->name }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div>
    @include('components.sidebar')
    <div>
      @include('components.header')
    </div>
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72 dark:bg-gray-400">
      @yield('content')
    </div>
</body>
</html>
