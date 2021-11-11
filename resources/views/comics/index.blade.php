{{-- includere layout.base  e header--}}

@extends('layout.base')

@section('pageContent')
    <h1 class="mt-4">Lista tutti i prodotti</h1>

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic["id"]}}</td>
                <td>{{$comic["title"]}}</td>
                <td>{{$comic["series"]}}</td>
                <td>€{{$comic["price"]}}</td>
                <td><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
            </tr>

            @endforeach
        </tbody>
      </table>
@endsection