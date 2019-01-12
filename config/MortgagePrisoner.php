<?php

  $myconfig = [
    "APP_NAMES" => env('APP_NAMES', 'BESPOKE'),
    "layout" => "mortgageprisonerlayout",
    "brand" => "Mortgage Prisoner",
    "titlesuffix" => "Mortgage Prisoner",
    "legalblerb" => "Mortgage Prisoner is not authorized by the FCA.",
    "description" => "Mortgage Prisoner",
    "twittersite" => "@mtgprisoner",
    'keywords' => ['Mortgage Prisoner', 'mortgage', 'prisoner', 'finance'],
  ];



$seometa = [
    'meta'      => [
        'defaults'       => [
            'title'        => $myconfig["titlesuffix"], // set false to total remove
            'description'  => $myconfig["description"], // set false to total remove
            'separator'    => ' - ',
            'keywords'     => $myconfig["keywords"],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => false, // set false to total remove
            'description' => $myconfig["description"], // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'article',
            'site_name'   => $myconfig["brand"],
            'locale'   => 'en_GB',
            //'images'      => ['https://bespokefinance.info/wp-content/uploads/sites/6/2016/03/bespoke-finance-social.jpg'],
        ],
    ],
    'twitter' => [
        'defaults' => [
          'card'        => 'summary',
          'creator'        => '@mtgprisoner',
          'site'        => $myconfig["twittersite"],
        ],
    ],
];


config(['seotools' => $seometa]);
return $myconfig;
