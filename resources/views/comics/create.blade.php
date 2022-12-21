@extends('layouts.app')

@section('title', 'add new comic')

@section('content')
    <div class="bg-dark">
        <div class="container py-5 text-white">
            <h2 class="text-center mb-5">Add new comic</h2>
            <div class="row justify-content-center">
                <div class="col-6 text-white">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title" class="form-label">Title:</label>
                            <input class="form-control" id="title" name="title" type="text" >
                        </div>
                        <div class="mb-2">
                            <label for="description" class="form-label">description:</label>
                            <textarea class="form-control" id="description" name="description" type="text"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="thumb" class="form-label">thumb url:</label>
                            <input class="form-control" id="thumb" name="thumb" type="text" >
                        </div>
                        <div class="mb-2">
                            <label for="price" class="form-label">price</label>
                            <input class="form-control" id="price" name="price" type="text" >
                        </div>
                        <div class="mb-2">
                            <label for="series" class="form-label">series</label>
                            <input class="form-control" id="series" name="series" type="text" >
                        </div>
                        <div class="mb-2">
                            <label for="sale_date" class="form-label">sale_date</label>
                            <input class="form-control" id="sale_date" name="sale_date" type="text" >
                        </div>
                        <div class="mb-2">
                            <label for="type" class="form-label">type</label>
                            <input class="form-control" id="type" name="type" type="text" >
                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection