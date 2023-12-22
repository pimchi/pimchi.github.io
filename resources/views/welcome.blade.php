@extends('layout')

@section('title')
    Главная страница
@endsection

@section('content')
    <style>
        .jumbotron {
            background-image: url('{{asset('storage/img/cops.jpg')}}'); /* Замените на путь к вашему фоновому изображению */
            background-size: cover;
            background-position-y: center;
            color: #fff;
            text-align: center;
            padding: 100px;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 3.5em;
        }

        .jumbotron p {
            font-size: 1.5em;
        }

        .jumbotron a {
            font-size: 1.2em;
        }

        .row h2 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .row p {
            font-size: 1.2em;
        }

    </style>


    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Добро пожаловать на наш сайт!</h1>
            <p class="lead">Инновации, удобство, качество — здесь вы найдете всё это и многое другое.</p>
            <hr class="my-4">
            <p>Разнообразие возможностей ждет вас. Готовы начать приключение?</p>
            @if(\Illuminate\Support\Facades\Auth::user())
                <a class="btn btn-primary btn-lg" href="{{ route('user.application.index') }}" role="button">Мои заявки</a>
            @else
                <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Регистрация</a>
            @endif
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <h2>О нас</h2>
                <p>Мы предоставляем уникальные решения для ваших потребностей. Наша миссия - делать вашу жизнь проще и
                    комфортнее.</p>
            </div>
            <div class="col-md-4">
                <h2>Наши услуги</h2>
                <p>Откройте для себя широкий спектр услуг, которые мы предоставляем. Ваше удовлетворение - наш
                    приоритет.</p>
            </div>
            <div class="col-md-4">
                <h2>Последние новости</h2>
                <ul>
                    <li>Новая возможность 1</li>
                    <li>Обновление сервисов</li>
                    <li>Специальное предложение для клиентов</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Почему выбирают нас</h2>
                <ul>
                    <li>Высокое качество обслуживания</li>
                    <li>Быстрое выполнение заявок</li>
                    <li>Индивидуальный подход к каждому клиенту</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Наши клиенты о нас</h2>
                <p>"Сотрудничество с этой компанией - отличный опыт! Рекомендую!"</p>
            </div>
        </div>
    </div>
@endsection
