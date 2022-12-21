@extends('layouts.app')

@section('title', 'single comic')
@section('content')

    <div class="bg-dark">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-2 ">
                    <div class="card">
                        <img class="card-img-top" src="{{ $comics->thumb }}" alt="{{ $comics->title }} ">
                        
                    </div>
                </div>
                <div class="col-5">
                    <div class="card px-3">
                        <div class="card-body">
                            <h5 class="card-title ">
                               {{ $comics->title }}
                            </h5>
                        </div>
                        <h6 class="card-subtitle text-muted">
                            Series: {{ $comics->series }}
                        </h6>
                        <h6 class="mb-4 text-muted">
                            type: {{ $comics->type }}
                        </h6>
                        <p class="text-muted">
                            Description:
                        </p>
                        <p class="card-text">
                            {{ $comics->description }}
                        </p>

                        <p class="text-center"> 
                            Price: {{ $comics->price }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
