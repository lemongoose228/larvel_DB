@extends('layout')

@section('title', 'Создание задания')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('store_task') }}">
        @csrf()

        <h1>Добавление задания</h1>

        <label class="titleInputText">
            Задание:<br>
            <input type="text" name="text" id="" value="{{ old('text') }}">
        </label>
        @error('text')
            <div class="error" style="color: red;">{{ "Введите задание" }}</div>
        @enderror

        <label class="titleInputText">
            Сотрудник:<br>
            <select name="employee_id">
                @foreach($staff as $employee) 
                    <option value="{{ $employee->id }}" {{ old('employee') == " $employee->fullname" ? "selected" : ""}}>{{ $employee->fullname }}</option>
                @endforeach
            </select>
        </label>
        @error('employee')
            <div class="error" style="color: red;">{{ "Выберите сотрудника" }}</div>
        @enderror

        <button type="submit">Создать</button>
    </form>
</div>
    
@endsection