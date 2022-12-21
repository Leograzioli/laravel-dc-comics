<footer>
    <div class="footer-top">
        <div class="container d-flex">

            <div class="links d-flex text-secondary">

                <!-- col  -->
                <div class="col">

                    <!-- lists -->
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($dcComicsData as $item)
                            <li>
                                <a :href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- lists -->
                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($shopData as $item)
                            <li>
                                <a :href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- col  -->
                <div class="col">

                    <!-- lists -->
                    <h3>DC COMICS</h3>
                    <ul>

                        @foreach ($dcData as $item)
                            <li>
                                <a :href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- col  -->
                <div class="col">

                    <!-- lists -->
                    <h3>DC COMICS</h3>
                    <ul>

                        @foreach ($sites as $item)
                            <li>
                                <a :href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- footer logo -->
            <div class="logo-footer">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>
</footer>