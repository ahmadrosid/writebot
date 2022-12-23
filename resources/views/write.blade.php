<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Writebot - AI Writing Assistant for Bloggers</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
            .title:empty:before {
                content:attr(data-placeholder);
                color:gray
            }

        </style>

        <script src="https://unpkg.com/marked" defer></script>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4">
                <div class="text-center text-gray-800 dark:text-gray-300 py-4">
                    <h1 class="text-7xl font-bold">Writebot</h1>
                </div>

                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                    <form action="/write/generate" method="post" class="inline-flex gap-2 w-full">
                        @csrf
                        <input required name="title" class="w-full outline-none text-2xl font-bold" placeholder="Type your article title..." />
                        <button class="rounded-md bg-emerald-500 px-4 py-2 text-white font-semibold">Generate</button>
                    </form>
                </div>
                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[720px] h-full text-gray-600">
                    <textarea class="min-h-[720px] h-full w-full outline-none" spellcheck="false">{{ $content }}</textarea>
                </div>
            </div>
        </div>
    </body>
</html>
