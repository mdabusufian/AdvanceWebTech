@extends('layout.app')
@section('content')
<h2>New Admission Student</h2><br>
<form action="{{route('service')}}" class="form-group" method="post">
   
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


    <div class="col-md-4 form-group">
        <span>Student Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control"><br>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Which Class? (Please select one form bellow )</span> <br><br>
        <input type="radio" id="Eight" name="Class" value="Eight">
        <label for="Eight">Eight</label>
        <input type="radio" id="Nine" name="Class" value="Nine">
        <label for="Nine">Nine</label><br><br>
    
        @error('Class')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    <div class="col-md-4 form-group">
        <span>Phone No.</span><br>
        <input type="text" name="phone" placeholder="01xxxxxxxxx" class="form-control"><br>
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Confirm" >                  
</form>
@endsection 