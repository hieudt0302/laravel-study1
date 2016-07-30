<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('header')
    </head>
    <body>
    	<div class = 'container'>
            @yield('content')
        </div> 
            @yield('footer')
    </body>
</html>