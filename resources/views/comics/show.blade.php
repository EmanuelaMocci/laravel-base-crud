@extends('layout.base')

@section('pageContent')
    <h1>{{$comic["series"]}}</h1>
    <img src="{{$comic["thumb"]}}" alt="">
    <p>{{$comic["description"]}}</p>
@endsection

