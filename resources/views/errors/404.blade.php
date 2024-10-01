<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>404 not found</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body>
        <main class="grid min-h-full px-6 py-24 bg-white place-items-center sm:py-32 lg:px-8">
            <div class="text-center">
            <p class="text-base font-semibold text-indigo-600">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="flex items-center justify-center mt-10 gap-x-6">
                <a wire:navigate href="{{url('/')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
            </div>
            </div>
  </main>

</body>
</html>

  