@extends ('layout.template')

@section('content')
<div class="carousel-container">
        <div class="carousel">
            <img src="{{ asset('images/produto1.webp') }}"  alt="Promoção 1">
            <img src="{{ asset('images/produto2.webp') }}"  alt="Promoção 2">
            <img src="{{ asset('images/produto3.jpg') }}"  alt="Promoção 3">
        </div>
        <button class="btn prev" onclick="prevSlide()">&#10094;</button>
        <button class="btn next" onclick="nextSlide()">&#10095;</button>
</div>

@endsection