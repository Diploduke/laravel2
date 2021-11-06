@extends('layouts.app')

@section('title-block')Редактирование сообщения@endsection

@section('content')
    <h1>Редактирование сообщения</h1>
    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" placeholder="Вася Пупкин" id="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="email" name="email" placeholder="pupkin@mail.ru" id="email" class="form-control" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control" value="{{$data->subject}}">
        </div>
        <div class="form-group">
            <label for="message">Текст сообщения</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Изменить!</button>
    </form>
@endsection
