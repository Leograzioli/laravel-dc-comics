<?php 
        $dcComicsData = [
            [
                'name' => 'Characters',
                'href' => '/Characters'
            ],
            [
                'name' => 'Comics',
                'href' => '/Comics'
            ],
            [
                'name' => 'Moviess',
                'href' => '/Moviess'
            ],
            [
                'name' => 'TV',
                'href' => '/TV'
            ],
            [
                'name' => 'Games',
                'href' => '/Games'
            ],
            [
                'name' => 'Videos',
                'href' => '/Videos'
            ],
            [
                'name' => 'News',
                'href' => '/News'
            ]
];
        $shopData = [
            [
                'name' => 'Shop DC',
                'href' => '/Shop-DC'
],
            [
                'name' => 'Shop DC Collectibles',
                'href' => '/Shop-DC-Collectibles'
            ]
];
       $dcData = [
            [
                'name' => 'Terms Of Use',
                'href' => '/Terms-Of-Use'
            ],
            [
                'name' => 'Privacy policy(New)',
                'href' => '/Privacy-policy'
            ],
            [
                'name' => 'Ad Choices',
                'href' => '/ad-choise'
            ],
            [
                'name' => 'Advertising',
                'href' => '/advertising'
            ],
            [
                'name' => 'Jobs',
                'href' => '/jobs'
            ],
            [
                'name' => 'Subscription',
                'href' => '/subscription'
            ],
            [
                'name' => 'Talent Workshops',
                'href' => '/talent-workshops'
            ],
            [
                'name' => 'CPSC Certificates',
                'href' => '/cpsc-certificates'
            ],
            [
                'name' => 'Ratings',
                'href' => '/ratings'
            ],
            [
                'name' => 'Shop Help',
                'href' => '/shop-help'
            ],
            [
                'name' => 'Contact Us',
                'href' => '/contact-us'
            ],
];
        $sites = [
            [
                'name' => 'DC',
                'href' => '/DC'
            ],
            [
                'name' => 'MAD Magazine',
                'href' => '/MAD-Magazine'
            ],
            [
                'name' => 'DC Kids',
                'href' => '/DC-Kids'
            ],
            [
                'name' => 'DC Universe',
                'href' => '/DC-Universe'
            ],
            [
                'name' => 'DC Power Visa',
                'href' => '/power-visa'
            ],
];

?>
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
