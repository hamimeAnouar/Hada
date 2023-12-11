@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" >
        </div>
        <div class="col-sm-6">
            <a href="/"> Previous </a> <br><br>
            <h1>{{$product['name']}}</h1>
            <h2>Prix :{{$product['price']}}</h2>
            <h4>Détails :{{$product['description']}}</h4>
            <h4>Catégorie :{{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Ajouter à la carte</button> </form>
            <br><br>
            <button class="btn btn-success">Acheter</button>
            <br><br>
        <div>
    </div>
</div>
@endsection
