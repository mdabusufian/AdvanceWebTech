@extends('layout.app')
@section('content')

<div class="already" style=" background-color : #98FB98; ">
    <hr class="new1">
    <center>
        <h1 style="text-align:center;"> @php echo session()->get('user')@endphp's Profile </h1>
        <hr class="new1">
    </center>
</div>
<form name="edit" action="{{route('editprofile')}}" onsubmit="return validateForm()" method="POST">

    {{csrf_field()}}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="table table-border">

        <input class="form-control" type="text" name="id" value="{{$seller->id}}" hidden>
        <tr>
            <th>Username</th>
            <td>{{$seller->username}}</td>
        </tr>
        <tr>
            <th>Full name</th>
            <td><input class="form-control" type="text" name="name" value="{{$seller->name}}"></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input class="form-control" type="email" name="email" value="{{$seller->email}}"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input class="form-control" type="text" name="password" value="{{$seller->password}}"></td>
        </tr>
        <tr>
            <th>status</th>
            <td><input class="form-control" type="text" name="status" value="{{$seller->status}}"></td>
        </tr>
        <tr>
            <th>Photo</th>
            <td><input class="form-control" type="file" name="image"></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input class="form-control" type="text" name="number" value="{{$seller->number}}"></td>
        </tr>



    </table>

    <input class="btn btn-primary" type="submit" name="submit" value="Update">

</form>



<br><br><br><br>






@endsection
