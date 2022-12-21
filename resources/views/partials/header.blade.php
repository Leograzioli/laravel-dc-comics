<?php 
$links = [
            [
                'name' => 'CHARACTERS',
                'href' => '/characters',

            ],
            [
                'name' => 'COMICS',
                'href' => '/comics',

            ],
            [
                'name' => 'MOVIES',
                'href' => '/movies',

            ],
            [
                'name' => 'TV',
                'href' => '/tv',

            ],
            [
                'name' => 'GAMES',
                'href' => '/games',

            ],
            [
                'name' => 'COLLECTIBLES',
                'href' => '/collectibles',

            ],
            [
                'name' => 'VIDEOS',
                'href' => '/videos',

            ],
            [
                'name' => 'FANS',
                'href' => '/fans',

            ],
            [
                'name' => 'NEWS',
                'href' => '/new',

            ],
            [
                'name' => 'SHOP',
                'href' => '/shop',

            ],
        ]
?>
<header>

    <div class="bg-primary">
        <div class="container text-white text-end">
            <span class="me-5">DC POWER&#8482; VISA&#174;</span>
            <span>ADITIONAL DC SITES</span>
        </div>
    </div>

    <div class="container">
        <div class="nav d-flex justify-content-between align-items-center py-2">

            {{-- logo  --}}
            <div class="nav-logo">
                <a href="/">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>
            </div>

            {{-- links --}}
            <ul class="d-flex align-items-center">

                @foreach ($links as $item)
                    <li class="me-4 text-dark fw-bold">
                        <a href="{{ route('comics.index') }}">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- search --}}
            <div>
                search
            </div>
        </div>
    </div>
</header>
