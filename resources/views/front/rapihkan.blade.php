@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB - Website BD</title>
@endsection

@section('page')
    page: 'home'
@endsection

@section('content')
    <div class=“container px-4 mx-auto md:px-8 flex justify-center items-start py-20”>
        <div class=“grid grid-cols-1 gap-6 lg:grid-cols-3”>
            <div class=“col-span-1 md:col-span-2 lg:col-span-1 p-4 rounded-md bg-gray-50 shadow-lg”>
                <h1 class=“text-xl font-semibold mb-4”>About Us</h1>
                <p class=“mb-8 text-sm”>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel erat eu nunc
                    maximus porta. Nulla in ex sed quam aliquet posuere id et metus. Integer ac leo eget arcu ultricies
                    placerat. Sed vehicula lectus non semper dictum.</p> <button class=“w-full py-2 px-4 border
                    border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500”>
                    Learn More </button>
            </div>
        </div>
    </div>
@endsection


<!DOCTYPE html>
<html lang=“en”>

<head>
    <meta charset=“UTF-8” />
    <meta http-equiv=“X-UA-Compatible” content=“IE=edge” />
    <meta name=“viewport” content=“width=device-width, initial-scale=1.0” />
    <title>About Us</title>
    <link rel=“stylesheet” href=“style.css”>
</head>

<body class=“bg-gray-100 text-gray-900 font-sans leading-normal text-lg”>
    <div class=“container px-4 mx-auto md:px-8 flex justify-center items-start py-20”>
        <div class=“grid grid-cols-1 gap-6 lg:grid-cols-3”>
            <div class=“col-span-1 md:col-span-2 lg:col-span-1 p-4 rounded-md bg-gray-50 shadow-lg”>
                <h1 class=“text-xl font-semibold mb-4”>About Us</h1>
                <p class=“mb-8 text-sm”>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel erat eu nunc
                    maximus porta. Nulla in ex sed quam aliquet posuere id et metus. Integer ac leo eget arcu ultricies
                    placerat. Sed vehicula lectus non semper dictum.</p> <button class=“w-full py-2 px-4 border
                    border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600
                    hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500”>
                    Learn More </button>
            </div>
        </div>
    </div>
</body>

</html>
