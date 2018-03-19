<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">  
     <title>Document</title>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
    <link type="text/css" rel="stylesheet" href="/css/vendor/toastr.min.css" />
    <link type="text/css" rel="stylesheet" href="../../../../css/pace-theme-minimal.css" />
    <link rel="icon" href="/img/favicon.ico">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script src="/js/vendor/jquery-3.1.1.min.js"></script>

    </head>
    <body>
        @include('layouts.partials.head')
        <div class="container">

        @yield('content')

        </div>



        @yield('footer')

    </body>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="../../../../js/vendor/plugins/pace.js"></script>    
    <script src="/js/vendor/toastr.min.js"></script>

</html>
 