@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
<section class="hero">
    <h1>The Olympics Games<br><small>of Paris 2024</small></h1>
    <img src="{{ asset('images/logos-white.png') }}" alt="Logos" class="hero-logos">
</section>

<form data-form data-url="{{ url('/registr') }}" class="auth-form">
    @csrf
    <label for="login">Пользователь</label>
    <input type="text" name="login" id="login">

    <label for="password">Пароль</label>
    <input type="password" name="password" id="password">

    <button type="submit">Зарегистрироваться</button>
</form>
@endsection
