@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">
        <div class="col-sm-0">
            <a href="#">Filter</a> 
        </div><br><br>
        <div class="col">
            <div class="trending-wrapper">
                <h2>Mes commandes</h2>
                @foreach($orders as $item)
                    <div class="row searched-item">
                        <div class="col-sm-2">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-7"> <!-- Adjusted column width for description -->
                            <div>
                                <h2>Name : {{$item->name}}</h2>
                                <h5>Statut de livraison : {{$item->status}}</h5>
                                <h5>Address : {{$item->address}}</h5>
                                <h5>Payment Status : {{$item->payment_status}}</h5>
                                <h5>Mode de paiement : {{$item->payment_method}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
