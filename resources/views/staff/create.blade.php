@extends('layout')

@section('title', 'Добавление сотрудника')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('store_employee') }}">
        @csrf()

        <h1>Добавление сотрудника</h1>

        <label class="titleInputText">
            Полное имя:<br>
            <input type="text" name="fullname" id="" value="{{ old('fullname') }}">
        </label>
        @error('fullname')
            <div class="error" style="color: red;">{{ "Введите имя" }}</div>
        @enderror


        <label class="titleInputText">
            Должность:<br>
            <input type="text" name="position" id="" value="{{ old('position') }}">
        </label>
        @error('position')
            <div class="error" style="color: red;">{{ "Введите должность" }}</div>
        @enderror


        <button type="submit">Добавить</button>
    </form>
</div>
    
@endsection