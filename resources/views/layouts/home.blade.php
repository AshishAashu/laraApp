<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet"></link>
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        <div class="col-md-12">
            @include('./inc/messages')
            @yield('content')
        </div>
    </div>
</body>
</html>