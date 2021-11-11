{{-- form per creare un nuovo comic --}}

@extends('layout.base')

@section('pageContent')
    <h2>Create a new comic</h2>

    <form action="{{route("comics.store")}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Insert Title">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb" placeholder="Insert Url Image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Insert Price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Insert Series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Insert Sale Date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Insert Type">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <textarea class="form-control" cols="30" rows="10" id="description" placeholder="Insert Description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>

    </form>
    
@endsection