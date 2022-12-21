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
                            <dd class="card-title ">
                                {{ $comics->title }}
                            </dd>
                            <dt>Series: </dt>
                            <dd class="card-subtitle text-muted">
                                {{ $comics->series }}
                            </dd>
                            <dt>type:</dt>
                            <dd class="mb-4 text-muted">
                                {{ $comics->type }}
                            </dd>
                            <dt>
                                Description:
                            </dt>
                            <dd class="card-text">
                                {{ $comics->description }}
                            </dd>

                            <dt>Price:</dt>
                            <dd>
                                {{ $comics->price }}
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
