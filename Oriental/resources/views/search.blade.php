@extends('master')
@section("content")
    <div class="custom-product">


            <div class="trending-wrapper">

                <h4>Résultas de votre recherche</h4> 
                @foreach($products as $item)

                    <div class="searched-item">

                        <a href="detail/{{$item['id']}}">

                    <img class="trending-image" src="{{$item['gallery']}}">

                <div class="">
                    <h5>{{$item["name"]}}</h5>

                    <h6>{{$item["description"]}}</h6>
                </div>
                <a>
             </div>
             @endforeach
             <div>
    </div>
@endsection
