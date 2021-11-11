{{-- includere layout.base  e header--}}

@extends('layout.base')

@section('pageContent')
    <h1>Lista tutti i prodotti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic["id"]}}</td>
                <td>{{$comic["title"]}}</td>
                <td>{{$comic["description"]}}</td>
                <td><img src="{{$comic["thumb"]}}" alt=""></td>
                <td>{{$comic["price"]}}</td>
                <td>{{$comic["series"]}}</td>
                <td>{{$comic["sale_date"]}}</td>
                <td>{{$comic["type"]}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection