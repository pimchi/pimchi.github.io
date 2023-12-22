@extends('layout')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="container mt-5">
        <h2>Регистрация</h2>
        @if($errors->any())
            <ul class="alert alert-danger mt-2 mb-2">
                @foreach($errors->all() as $error)
                    <li class="mb-1">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{route('registration')}}">
            <div class="form-group">
                <label for="login">Логин:</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="fullName">ФИО:</label>
                <input type="text" class="form-control" id="fullName" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="+7(XXX)-XXX-XX-XX" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('jquery.mask.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $("#phone").mask("+7 (999) 999-99-99");
        });
    </script>
@endsection
