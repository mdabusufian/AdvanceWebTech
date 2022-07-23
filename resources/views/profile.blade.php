@extends('layout.profile')
@section('content')



<div class="already1" style=" background-color : #98FB98; ">
    <hr class="new1">
    <center>
        <h1 style="text-align:center;"> @php echo session()->get('user')@endphp's Profile </h1>
        <hr class="new1">
    </center>

    <h1>{{session('error')}}</h1>
</div>

<div class="container">
    <image src="/images/0bfc3c5b20c439c4972383592e1c26bc.jpg" alt='Avatar' style='width:300px;height:300px;'>
        <div class="overlay">
            <div class="text">
                <h3> Full Name: {{$seller->name}} </h3>
                <span>Username: {{$seller->username}}</span><br>
                <span>Date of birth: {{$seller->date}}</span><br>
                <span>Email: {{$seller->email}}</span><br>
                <span>Number: {{$seller->number}}</span><br>
                <span>Gender: {{$seller->gender}}</span><br>

                <br>

            </div>
        </div>
</div>
<br>
<center><a class="btn btn-primary" href="{{route('editprofile')}}">Edit Profile</a>
</center>


<br><br><br><br>








@endsection
