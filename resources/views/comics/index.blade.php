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
                            <td class="d-flex">

                                {{-- to see details --}}
                                <a class="btn btn-primary me-1" href="{{ route('comics.show', $comic->id) }}">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                {{-- to delete product--}}
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- to add new produc--}}
            <a href=" {{ route('comics.create') }} " class="btn btn-primary"> Add new comic</a>
        </div>
    </div>
@endsection
