@extends('layout.Home')
@section('content')

<h1>{{session('error')}}</h1>

<br>
<br>
<br>

<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <p style="text-align: right" ;>
                    <div class="already">
                        <h2> <br> Not Registered ?<br> <br><a class="btn btn-primary"
                                href="{{route('registration')}}">Sign-UP
                                here</a> </h2>
                    </div>
                </p>
                <div class="Rform" style="height: 450px; width: 300px;">
                    <h1> <i>User Login </i></h1>
                    <legend>
                        <form name="login" action="{{route('login')}}" onsubmit="return validateForm()" method="POST">

                            {{csrf_field()}}

                            @if ($errors->any())
                            <div class="alert-warning">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <b>Phone Number: </b><input class="form-control" type="text" name="number"
                                placeholder="Phone Number">
                            <br>
                            <b>Password: </b><input class="form-control" type="password" name="password"
                                placeholder="Password">
                            </p>


                            <br>

                            <input class="btn btn-primary" type="submit" name="submit" value="Sign In"> <input
                                class="btn btn-primary" type="reset" name="reset"> <br> <br>
                        </form>
                    </legend>



                </div>
            </div>
        </div>
    </div>


    @endsection
