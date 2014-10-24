<?php

require __DIR__ . '/../vendor/autoload.php';

$sponsors = [
    [
        'id' => 1,
        'name' => 'Varsity News Network'
    ],
    [
        'id' => 2,
        'name' => 'US Signal Company'
    ]
];

$members = [
    [
        'id' => 3,
        'name' => 'Brian Scaturro',
        'twitter' => '',
        'github' => '',
        'email' => ''
    ]
];

$talks = [
    [
        'id' => 1,
        'title' => 'Log All The Things',
        'speaker' => 3/*
            'name' => 'Brian Scaturro'
        ],*/,
        'description' => 'Being able to log things from various servers and applications is important. It\'s also ' .
            'important to be able to quickly search those logs in one place. We will discuss setting up a ' .
            'centralized log server, and how to get logs from multiple servers and apps to that server. We then ' .
            'take a look at indexing and searching those logs using logstash and kibana.'
    ]
];

$events = [
    [
        'id' => 2012,
        'title' => 'High Performance PHP',
        'description' => 'Let\'s make PHP run fast!' . "\n\n" .
            'Topics and speakers to be announced shortly. If you have something you\'d like to share on this topic, ' .
            'let us know!' . "\n\n" .
            'Food and beer provided.',
        'talks' => [1],
//        'presentations' => [[
//            'title' => 'Log All The Things',
//            'speaker' => [
//                'name' => 'Brian Scaturro'
//            ],
//            'description' => 'Being able to log things from various servers and applications is important. It\'s also ' .
//                'important to be able to quickly search those logs in one place. We will discuss setting up a ' .
//                'centralized log server, and how to get logs from multiple servers and apps to that server. We then ' .
//                'take a look at indexing and searching those logs using logstash and kibana.'
//        ]],
        'date' => '10/22/2014 18:00:00',
//        'location' => [
//            'description' => 'Varsity News Network',
//            'address1' => '40 Ionia Ave',
//            'address2' => 'Suite 445',
//            'city' => 'Grand Rapids',
//            'state' => 'MI',
//            'zip' => '49503'
//        ]
    ],
    [
        'id' => 2013,
        'title' => 'Testing',
        'description' => 'TestING STOIAJDH'
//        'date' => '11/22/2014 18:00:00',
//        'location' => [
//            'description' => 'Varsity News Network',
//            'address1' => '40 Ionia Ave',
//            'address2' => 'Suite 445',
//            'city' => 'Grand Rapids',
//            'state' => 'MI',
//            'zip' => 49503
//        ]
    ]
];

require_once __DIR__.'/../vendor/autoload.php';


$configs = ['debug' => true];

foreach (glob(__DIR__ . '/../config/*.php') as $file) {
    $configs = array_merge($configs, require $file);
}

$app = new Silex\Application($configs);
$app->register(new \Silex\Provider\DoctrineServiceProvider());
$app->register(new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider());

$app->get('/api/sponsors', function () use ($app, $sponsors) {
    $serializer = new \GrPhpDev\Domain\Serializer\SponsorSerializer();
    $sponsors = $app['repository.sponsors']->getAll();
    $data = $serializer->serializeCollection($sponsors);
    return $app->json($data);
});

$app->get('/api/events', function () use ($app) {
    $serializer = new \GrPhpDev\Domain\Serializer\EventSerializer();
    $events = $app['repository.events']->getAll();
    $data = $serializer->serializeCollection($events);
    return $app->json($data);
});

$app->run();
