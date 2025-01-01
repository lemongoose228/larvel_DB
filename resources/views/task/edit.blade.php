@extends('layout')

@section('title', 'Редактирование задания')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('update_task', $task->id) }}">
        @csrf()

        <h1>Редактирование задания</h1>

        <label class="titleInputText">
            Задание:<br>
            <input type="text" name="text" id="" value="{{ old('text') ?? $task->text }}">
        </label>
        @error('text')
            <div class="error" style="color: red;">{{ "Введите задание" }}</div>
        @enderror


        <label class="titleInputText">
            Сотрудник:<br>
            <select name="employee_id">
                @foreach($staff as $employee) 
                    @if (old('author'))
                        <option value="{{ $employee->id }}" {{ old('employee') == " $employee->fullname " ? "selected" : ""}}>{{ $employee->fullname }}</option>
                    @else
                        <option value="{{ $employee->id }}" {{ $task->employee->fullname == " $employee->fullname " ? "selected" : ""}}>{{ $employee->fullname }}</option>
                    @endif
                @endforeach
            </select>
        </label>
        @error('employee')
            <div class="error" style="color: red;">{{ "Выберите сотрудника" }}</div>
        @enderror

        <button type="submit">Обновить</button>
    </form>
</div>
    
@endsection