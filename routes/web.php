<?php

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\CharacterStream;

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
    $data = 
    [
        'links' => [
            'characters' => 'characters',
            'comics' => 'comics',
            'movies' => 'movies',
            'tv' => 'tv',
            'games' => 'games',
            'collectibles' => 'collectibles',
            'videos' => 'videos',
            'fans' => 'fans',
            'news' => 'news',
            'shop' =>'shop',
        ],
        "banners" => [
            "digital comics" => "buy-comics-digital-comics.png",
            "dc merchandise" => "buy-comics-merchandise.png",
            "subscription" => "buy-comics-shop-locator.png",
            "comic shop locator" => "buy-comics-subscriptions.png",
            "dc power visa" => "buy-dc-power-visa.svg"
        ],
        'ft_links' => [
            'dc comics' => [
                'Characters' => 'Characters',
                'Comics' => 'Comics',
                'Movies' => 'Movies',
                'Tv' => 'Tv',
                'Games' => 'Games',
                'Videos' => 'Videos',
                'News' => 'News',
            ],
            'shop' => [
                'Shop DC' => 'Shop DC',
                'Shop DC collectibles' => 'Shop DC collectibles',
            ],
            'dc' => [
                'Terms of Use' => 'Terms of Use',
                'Privacy Policy (New)' => 'Privacy Policy ()',
                'Ad Choices' => 'Ad Choices',
                'Advertising' => 'Advertising',
                'Jobs' => 'Jobs',
                'Subscriptions' => 'Subscriptions',
                'Talent Workshops' => 'Talent Workshops',
                'CPSC Certificates' => 'CPSC Certificates',
                'Ratings' => 'Ratings',
                'Shop Help' => 'Shop Help',
                'Contact Us' => 'Contact Us',
            ],
            'sites' => [
                'DC' => 'DC',
                'MAD Magazine' => 'MAD Magazine',
                'DC Kids' => 'DC Kids',
                'Dc Universe' => 'Dc Universe',
                'DC Power Visa' => 'DC Power Visa',
                'videos' => 'videos',
                'news' => 'news',
            ],

        ],
        'socials' => [
            "facebook.png",
            "twitter.png",
            "youtube.png",
            "pinterest.png",
            "periscope.png",
        ]
    ];
    return view('home', $data);
})->name("homepage");
