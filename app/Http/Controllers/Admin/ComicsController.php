<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
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
        return view('comics/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
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
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
