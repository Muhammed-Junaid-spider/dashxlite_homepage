<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @section('header')
    @show

    <title>index </title>
    <style>
        
            .dropbtn {
            
            color: white;
            padding: 1px;
            font-size: 10px;
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

           

            .dropdown:hover .dropdown-content {
            display: block;
            }

           
    </style>

</head>

<body>

    @include('client.layouts.header')
    @section('content')
    @show
    @include('client.layouts.footer')
    @section('bottom')
    @show

</body>

</html>