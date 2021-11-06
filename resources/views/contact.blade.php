@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
    <h1>Контакты</h1>
    <h2>Обратная связь</h2>


    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" placeholder="Вася Пупкин" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="email" name="email" placeholder="pupkin@mail.ru" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст сообщения</label>
            <textarea name="message" placeholder="Ваше сообщения" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить!</button>

    </form>

@endsection
