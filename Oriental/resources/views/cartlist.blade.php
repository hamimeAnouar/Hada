@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">
        <div class="col-sm-0">
            <a href="#">Filter</a> 
        </div><br><br>
        <div class="col">
            <div class="trending-wrapper">
                <h2>Result for Products</h2>
                <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
                @foreach($products as $item)
                    <div class="row searched-item">
                        <div class="col-sm-2">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-7"> <!-- Adjusted column width for description -->
                            <div>
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-2"> <!-- Adjusted column width for button -->
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                        </div>
                    </div>
                @endforeach
                <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
            </div>
        </div>
    </div>
</div>
@endsection
