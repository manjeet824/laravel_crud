<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>

<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">


    <link href="{{ asset('css/main.css') }}" rel='stylesheet'>
   
    
    <title>Crud Application</title>
  </head>
  <body class="@yield('body-class')">
@yield('content' )
@yield('showProducts')
</body>
<script src="{{ asset('js/jquery.js') }}" ></script>
  
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
     <script src="{{ asset('js/main.js') }}" ></script>
  </body>
</html>