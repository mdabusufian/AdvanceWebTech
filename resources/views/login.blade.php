@extends('layout.app')
@section('content')
<body>
    <style>
        .center {
  margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;
}
    </style>
</body>
<div class="center">
<h2>Login</h2>
<form action="{{route('login')}}" class="form-group" method="post">
  
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

    <br>
    <div class="col-md-4 form-group">
        <span>User Id</span>
        <br>
        <input type="text" name="user_id" placeholder="Provide User Id" class="form-control"><br>
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span> 
        <br>
        <input type="password" name="password" placeholder="Provide Password" class="form-control"> <br><br>
    
        
    
    <input type="submit" class="btn btn-success" value="Login">              
    </div>    
</form>

@endsection 