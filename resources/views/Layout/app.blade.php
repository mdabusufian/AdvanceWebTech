<html>

<head>
    <title>CiscoPharma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="header" style="text-align: center">
    <a href="{{route('Home')}}" class="logo" style=" top: 50%; left: 50%; transform: translate(-120% , -25%); "> <img id="myImg" src="/images/Pharma.png" alt="Snow" style="width:100% ;max-width:100px;"> </a> 
        <h1>CiscoPharma </h1>
    </div>

    <br><br>

    @include('inc.nav')
    <div>
        @yield('content')
    </div>



</body>

</html>
