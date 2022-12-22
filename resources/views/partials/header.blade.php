<?php 
$links = [
            [
                'name' => 'HOME',
                'href' => 'home',

            ],
            [
                'name' => 'COMICS',
                'href' => 'comics.index',

            ],
            [
                'name' => 'MOVIES',
                'href' => '',

            ],
            [
                'name' => 'TV',
                'href' => '',

            ],
            [
                'name' => 'GAMES',
                'href' => '',

            ],
            [
                'name' => 'COLLECTIBLES',
                'href' => '',

            ],
            [
                'name' => 'VIDEOS',
                'href' => '',

            ],
            [
                'name' => 'FANS',
                'href' => '',

            ],
            [
                'name' => 'NEWS',
                'href' => '',

            ],
            [
                'name' => 'SHOP',
                'href' => '',

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
                    <li class="me-4 text-dark ">
                        <a href="{{ $item['href'] != '' ? route($item['href']) : '' }}" 
                        class="{{ Route::currentRouteName() === $item['href'] ? 'ms_active' : '' }}" 
                        >
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
