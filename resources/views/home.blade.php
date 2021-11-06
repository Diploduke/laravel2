@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium debitis delectus, ducimus ea, eius esse est eveniet fuga labore laudantium nobis odio quam quia? Aliquam harum nihil saepe sed voluptatem.</p>
@endsection

@section('aside')
    @parent
    <p>Доп. текст для главной</p>
@endsection
