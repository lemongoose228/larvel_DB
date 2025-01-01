@extends('layout')

@section('title', 'Список сотрудников')

@section('content')
    <h1>Список сотрудников</h1>

    <div class="staff_list">
        @foreach($staff as $employee)
            <div class="staff_block">
                <span>Имя: {{ $employee->fullname }} </span>
                <span>Должность: {{ $employee->position }}</span>

                <a href="{{ route('edit_employee', $employee->id) }}">Редактировать</a>
                <form method="POST" action="{{ route('delete_employee', $employee->id) }}">
                    @method('DELETE')
                    @csrf()
            
            
                    <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection