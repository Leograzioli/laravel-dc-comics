<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Models\comic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = comic::all();
    $data = [
        'comics' => $comics,
        'links' => [
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
        ],
        'dcComicsData' => [
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
        ],
        'shopData' => [
            [
                'name' => 'Shop DC',
                'href' => '/Shop-DC'
            ],
            [
                'name' => 'Shop DC Collectibles',
                'href' => '/Shop-DC-Collectibles'
            ]
        ],
        'dcData' => [
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
        ],
        'sites' => [
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
        ]
    ];
    return view('home', $data);
});

Route::resource('comics', ComicsController::class);
