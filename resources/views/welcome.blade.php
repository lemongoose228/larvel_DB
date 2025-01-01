@extends('layout')

@section('title', 'Главная')

@section('content')
    <h1>Задачи для сотрудников</h1>

    <div class="task_list">
        <div class="task_block">
            <span>Должность: графический дизайнер</span>
            <span>Задача: разработать дизайн приложения и провести юзабилити тестирования</span>

            <a href="">Редактировать</a>
            <a href="">Удалить</a>
        </div>
    </div>
@endsection