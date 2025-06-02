<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to My Laravel Project</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="bg-white/75 p-8 rounded-lg shadow-xl text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to My Laravel Project</h1>
        <p class="text-lg mb-6">This is a basic Laravel app with no database.</p>
        <div>
            <a href="{{ url('/about') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">About</a>
            <a href="{{ url('/contact') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Contact</a>
        </div>
    </div>
</body>
</html>
