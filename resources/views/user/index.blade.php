@extends('layout')

@section('title')
    Личный кабинет
@endsection

@section('content')
    <div class="container bg-white p-4 rounded shadow mt-4">
        <h2 class="text-center mb-4">Личный кабинет</h2>
        <p>Добро пожаловать, {{$user->full_name}}</p>
        <p>Ваш личный кабинет содержит различные функции и информацию, доступную только зарегистрированным пользователям.</p>
    </div>
@endsection
