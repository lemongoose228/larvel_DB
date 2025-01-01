@extends('layout')

@section('title', 'Главная')

@section('content')
    <h1>Задачи для сотрудников</h1>

    <div class="task_list">
        @foreach($tasks as $task)
            <div class="task_block">
                <span>Имя: {{ $task->employee->fullname }}</span>
                <span>Должность: {{ $task->employee->position }}</span>
                <span>Задача: {{ $task->text }}</span>

                <a href="{{ route('edit_task', $task->id) }}">Редактировать</a>
                <form method="POST" action="{{ route('delete_task', $task->id) }}">
                    @method('DELETE')
                    @csrf()
            
            
                    <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
                </form>
            </div>
        @endforeach

    </div>
@endsection