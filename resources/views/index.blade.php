@extends('layouts.app')

@section('title', 'Олимпиада 2024')

@section('content')


<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="hero">
    <h1>The Olympics Games<br><small>of Paris 2024</small></h1>
    <img src="{{ asset('images/logos-white.png') }}" alt="Logos" class="hero-logos">
</section>

<section class="about">
    <h2>About the Games</h2>

    <div class="grid">
        <div class="card">
            <img src="{{ asset('images/about-01.png') }}" alt="SPORTS">
            <h3>SPORTS</h3>
            <p>Discover all Olympic sports included in the 2024 Games and learn more about their history and rules.</p>
        </div>
        <div class="card">
            <img src="{{ asset('images/about-02.png') }}" alt="VENUES">
            <h3>VENUES</h3>
            <p>Explore the magnificent stadiums and arenas across Paris where the world's best athletes will compete.</p>
        </div>
        <div class="card">
            <img src="{{ asset('images/about-03.png') }}" alt="CELEBRATING THE GAMES">
            <h3>CELEBRATING THE GAMES</h3>
            <p>Find out how Paris is preparing to celebrate the Olympic spirit with culture, community and passion.</p>
        </div>
        <div class="card">
            <img src="{{ asset('images/about-04.png') }}" alt="SPECTATOR INFORMATION">
            <h3>SPECTATOR INFORMATION</h3>
            <p>Get all the essential info for fans and visitors — tickets, venues, transport and accessibility.</p>
        </div>
    </div>
</section>

@endsection
