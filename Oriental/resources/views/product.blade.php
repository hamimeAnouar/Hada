@extends('master')
@section("content")
<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        @foreach($products as $index => $item)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($products as $index => $item)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
                <a href="detail/{{$item['id']}}">
                    <img src="{{ $item['gallery'] }}" class="slider-img d-block w-100" alt="Product Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $item['name'] }}</h5>
                    <p>{{ $item['description'] }}</p>
                </div>
                </a>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
