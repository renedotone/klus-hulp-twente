@extends('layout')

@section('title', 'Landing page')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/800x300.png?text=placeholder image 1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://via.placeholder.com/800x300.png?text=placeholder image 2" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://via.placeholder.com/800x300.png?text=placeholder image 3" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

@endsection