<html>

<head>
    <title>CiscoPharma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="/CSS/Home.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="header" style="text-align: center">
    <a href="{{route('Home')}}" class="logo" style=" top: 50%; left: 50%; transform: translate(-120% , -25%); "> <img id="myImg" src="/images/Pharma.png" alt="Snow" style="width:100% ;max-width:100px;"> </a>
        <h1>CiscoPharma </h1>
    </div>
    <div class="container">
        <br><br>
        @include('inc.lognav')
        <div>
            @yield('content')
        </div>
    </div>


  
  

</body>

</html>
