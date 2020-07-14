<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen flex bg-red-200">

    <div class="m-auto w-full max-w-lg">
        <form action="{{ route('newsletter.subscribe') }}" method="POST">
            @csrf
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Email address
                </label>
              </div>
              <div class="md:w-2/3">
                <input name="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="email">
              </div>
            </div>

            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3"></div>
              <label class="md:w-2/3 block text-gray-500 font-bold">
                <input name="newsletter" class="mr-2 leading-tight" type="checkbox">
                <span class="text-sm">
                  Send me your newsletter!
                </span>
              </label>
            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                  Sign Up
                </button>
              </div>
            </div>
          </form>

    </div>
    
</body>
</html>