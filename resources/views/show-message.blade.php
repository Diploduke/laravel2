@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
    <h1>{{$data->subject}}</h1><br>
    <div class="alert alert-info">
        <h3>{{ $data->name }}</h3>
        <p><a href="mailto:{{$data->email}}">{{$data->email}}</a></p>
        <p>{{ $data->message }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a class="btn btn-info" href="{{ route('contact-update', $data->id) }}" role="button">Редактировать</a>
        <a class="btn btn-danger" href="{{ route('contact-delete', $data->id) }}" role="button">Удалить</a>
    </div>
@endsection

