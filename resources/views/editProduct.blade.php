@extends('layout.app')
@section('content')


<h1>{{session('error')}}</h1>

<form action="{{ route('editProduct') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row ">
            <div class="form-group">
                <input type="text" name="name" value="{{$products->name}}" class="form-control" required>
            </div>
            <input type="text" name="id" value="{{$products->id}}" class="form-control" hidden>
            <br>
            <div class="form-group">
                <input type="number" name="price" value="{{$products->price}}" class="form-control" required>
            </div>

            <br>
            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>

        </div>
    </div>

</form>

@endsection
