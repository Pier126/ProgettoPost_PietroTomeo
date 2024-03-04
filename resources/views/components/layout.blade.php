
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- GOOGLE FONTS  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
    {{-- Aos  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- FONTAWESOME  --}}
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


   <link rel="icon" type="image" href="/logo.png">
    <title>The AulaB Post</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <x-nav/>
    <div class="div min-vh-100">

        {{$slot}}
    </div>


    <x-footer></x-footer>
 
{{-- Aos  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
{{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>