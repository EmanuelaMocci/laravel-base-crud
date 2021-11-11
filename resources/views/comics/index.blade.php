{{-- includere layout.base  e header--}}

@extends('layout.base')

@section('pageContent')
    <h1 class="mt-4">All comics</h1>

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
            <th scope="col"></th>
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
                <td><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">View</button></a></td>
                <td><a href="{{route("comics.edit", $comic["id"])}}"><button type="button" class="btn btn-warning">Modify</button></a></td>
                <td>
                  <form action="{{route("comics.destroy", $comic["id"])}}" method="POST">
                    @csrf

                    @method("DELETE")
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</button>
                  </form>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
@endsection