@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1><br>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h4>{{ $el->subject }}</h4>
            <p>{{ $el->name }}<br>
                <small>{{ $el->created_at }}</small></p>
{{--            <p>{{ $el->email }}</p>--}}
{{--            <p>{{ $el->message }}</p>--}}
            <a class="btn btn-info" href="{{ route('contact-data-showMessage', $el->id) }}" role="button">Подробнее</a>
        </div>
    @endforeach()
@endsection

