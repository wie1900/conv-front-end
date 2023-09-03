<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers To Words Converter</title>
</head>
<body>
    <div class="container mx-auto pt-10 justify-center">
        <div class="flex flex-row mx-auto w-[600px] bg-slate-50 rounded-lg mb-2 border border-gray-300 py-5">
            <div class="basis-1/12"></div>
            <div class="basis-10/12 text-start">
                @yield('convcontent')
            </div>
            <div class="basis-1/12"></div>
        </div>
    </div>
</body>
</html>
