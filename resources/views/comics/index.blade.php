@extends('layouts.app')

@section('title', 'comics')

@section('content')
    <div class="wrapper bg-dark">
        {{-- cards --}}
        <div class="container py-5 ">

            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td> {{ $comic->title }} </td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td><a href="{{ route('comics.show', $comic->id) }}">show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href=" {{ route('comics.create') }} " class="btn btn-primary"> Add new comic</a>
        </div>
    </div>
@endsection
