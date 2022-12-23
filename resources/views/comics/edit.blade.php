@extends('layouts.app')
@section('title', 'edit comic')
@section('content')
<div class="bg-dark">
    <div class="container py-5 text-white">
        <h2 class="text-center mb-5">Modifica comic  {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-6 text-white">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="title" class="form-label">Title:</label>
                        <input class="form-control" id="title" name="title" type="text" value="{{$comic->title}}" >
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">description:</label>
                        <textarea class="form-control" id="description" name="description" type="text">{{$comic->description}}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="thumb" class="form-label">thumb url:</label>
                        <input class="form-control" id="thumb" name="thumb" type="text" value="{{$comic->thumb}}" >
                    </div>
                    <div class="mb-2">
                        <label for="price" class="form-label">price</label>
                        <input class="form-control" id="price" name="price" type="text" value="{{$comic->price}}">
                    </div>
                    <div class="mb-2">
                        <label for="series" class="form-label">series</label>
                        <input class="form-control" id="series" name="series" type="text" value="{{$comic->series}}">
                    </div>
                    <div class="mb-2">
                        <label for="sale_date" class="form-label">sale_date</label>
                        <input class="form-control" id="sale_date" name="sale_date" type="text" value="{{$comic->sale_date}}">
                    </div>
                    <div class="mb-2">
                        <label for="type" class="form-label">type</label>
                        <input class="form-control" id="type" name="type" type="text" value="{{$comic->type}}">
                    </div>
                    <button type="submit" onclick="return confirm('you are about to edit the {{$comic->title}}, are you sure?')" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection