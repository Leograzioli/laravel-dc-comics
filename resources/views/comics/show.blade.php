@extends('layouts.app')

@section('title', 'single comic')
@section('content')

    <div class="bg-dark">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-2 ">
                    <div class="card">
                        <img  class="card-img-top" src="{{$comics->thumb}}" alt="{{$comics->title}} ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comics->title }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
