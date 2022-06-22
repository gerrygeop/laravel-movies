<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GeopMovie</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <style>
        body{
            background-image: url('https://images.unsplash.com/photo-1503726876301-67e54d319b60?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1143&q=80');
            background-size: cover;
        }
        .bggreen:hover{
            background-color: #39d67a;
        }
    </style>
    
</head>
<body>
    
    <div class="p-16">
        <div class="w-full rounded mt-8 shadow-xl" style="height: 500px;">
            
            <div class="px-6 py-4 mt-24" style="margin-left: 40%;">
                <a  href="{{ route('movie.index') }}" 
                    class="inline-block bg-transparent bggreen border border-green-500 rounded-lg px-6 py-2 uppercase font-semibold text-green-500 hover:text-white tracking-wider text-xl duration-150">
                    Get started!
                </a>
            </div>

        </div>
        
    </div>

</body>
</html>