@extends('layouts.app')

@section('title', 'home')
@section('content')
    <div class="bg-dark">
        <div class="container text-white py-5">
            <div class="container py-5">
                <div class="row row-cols-6 text-white gy-5">
    
                    @foreach ($comics as $item)
                        <div class="col">
                            <div class="ms_card">
                                <div class="ms_card-img mb-3">
                                    <img src="{{ $item['thumb'] }}" alt="">
                                </div>
                                <div class="ms_card-txt">
                                    <p>{{$item['series']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                {{-- load more button --}}
                <div class="ms_bnt d-flex justify-content-center mt-5"> 
                    <a class="text-white text-decoration-none bg-primary py-2 px-5" href="#">LOAD MORE</a>    
                </div>
            </div>
        </div>
    </div>

@endsection
