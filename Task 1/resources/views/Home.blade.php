@extends('layout.login1')


@section('content')
<div class="col-sm-2">

<input type="text" class="form-control" style="border-radius: 15px; " placeholder=" Search" name="searchInput" id="searchInput">

</div>
<div class="status" style="position: static; ">
    @foreach ($products as $item)
    <div class="mystatus" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
        <div class="card-body">
            <p class="mystatus-text text-center">{{$item->name}}<br>
                <span>Price: BDT{{$item->price}}</span><br>
                <span>Seller Name: {{$item->seller}}</span><br>
                <br><br>
                <hr>
        </div>
    </div>
    @endforeach



    <script type="text/javascript">
            $(document).ready(function() {
                $("#searchInput").keyup(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'searchpost.php',
                        data: {
                            searchInput: $("#searchInput").val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                            if($("#searchInput").val()===""){
            									$("#output").html('');
            							}
                        }
                    });
                });
            });


  </script>
    @endsection
