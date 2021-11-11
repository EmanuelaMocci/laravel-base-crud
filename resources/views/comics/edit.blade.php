@extends('layout.base')

@section('pageContent')

<h1>Modify: {{$comic["series"]}}</h1>

<form action="{{route('comics.update', $comic["id"])}}" method="POST">
@csrf

@method('PUT')

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{old('title') ? old('title') : $comic['title']}}">
</div>

<div class="mb-3">
    <label for="thumb" class="form-label">Image Url</label>
    <input type="text" class="form-control" name="thumb" id="thumb" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="price" value="{{old('price') ? old('price') : $comic['price']}}">
</div>

<div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" name="series" id="series" value="{{old('series') ? old('series') : $comic['series']}}">
</div>

<div class="mb-3">
    <label for="sale_date" class="form-label">Sale Date</label>
    <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" name="type" id="type" value="{{old('type') ? old('type') : $comic['type']}}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{old('description') ? old('description') : $comic['description']}}">
</div>

<button type="submit" class="btn btn-warning">Modify</button>

</form>
    
@endsection