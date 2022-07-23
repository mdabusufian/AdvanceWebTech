@extends('layout.app')
@section('content')


<h1>{{session('error')}}</h1>

<form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row ">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <input type="number" name="price" Placeholder="Price" class="form-control" required>
            </div>

            <br>
            <div class="form-group">
                <input type="file" name="image" class="form-control" required>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>

        </div>
    </div>

</form>

@endsection
