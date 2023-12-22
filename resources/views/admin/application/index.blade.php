@extends('layout')

@section('title')
    Все заявки
@endsection

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        form {
            display: inline-block;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .confirm-button {
            background-color: #4caf50;
            color: white;
        }

        .confirm-button:hover {
            background-color: #45a049;
        }

        .reject-button {
            background-color: #f44336;
            color: white;
        }

        .reject-button:hover {
            background-color: #d32f2f;
        }

        .cancel-button {
            background-color: #d32f2f;
            color: white;
        }

        .cancel-button:hover {
            background-color: #b71c1c;
        }
    </style>

    <div class="container mt-5">
        <h1>Список заявок</h1>
        <table>
            <thead>
            <tr>
                <th>Имя пользователя</th>
                <th>Описание нарушения</th>
                <th>Номер автомобиля</th>
                <th>Статус</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->user->full_name }}</td>
                    <td>{{ $application->description }}</td>
                    <td>{{ $application->car_number }}</td>
                    <td>
                        {{\App\Enums\StatusEnum::getStatusName(\App\Enums\StatusEnum::from($application->status))}}
                    </td>
                    <td>
                        @if($application->status == 'new')
                            <form action="{{ route('admin.applications.update', $application->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="status" value="{{\App\Enums\StatusEnum::ACCEPTED->value}}" class="confirm-button">Подтвердить</button>
                                <button type="submit" name="status" value="{{\App\Enums\StatusEnum::REJECTED->value}}" class="reject-button mt-2">Отклонить</button>
                            </form>
                        @else
                            <!-- Сообщение, что действия недоступны -->
                            Недоступно
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
