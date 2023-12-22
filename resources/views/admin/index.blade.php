@extends('layout')

@section('title')
    Личный кабинет
@endsection

@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp

@section('content')
    <div class="container">
        <h1 class="mt-5">Добро пожаловать, {{$user->full_name}}</h1>
        <p class="mt-4">Это ваша административная панель, где вы можете управлять заявками.</p>
        <h2>Доступные действия:</h2>
        <ul>
            <li><a href="{{ route('admin.application.index') }}">Просмотреть все заявки</a></li>
        </ul>
    </div>
@endsection
