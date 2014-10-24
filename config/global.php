<?php

return [
    'orm.proxies_dir' => __DIR__ . '/../data/proxies',
    'orm.em.options' => [
        'mappings' => [
            [
                'type' => 'annotation',
                'namespace' => 'GrPhpDev\Domain\Model',
                'path' => __DIR__ . '/../src/Domain/Entity',
            ],
            [
                'type' => 'yml',
                'path' => __DIR__ . '/../src/Persistence/Mapping',
                'namespace' => 'GrPhpDev\Domain\Entity',
            ],
        ],
    ],
    'repository.events' => function ($c) {
        return new \GrPhpDev\Persistence\Repository\EventRepository($c['orm.em']);
    },
    'repository.sponsors' => function ($c) {
        return new \GrPhpDev\Persistence\Repository\SponsorRepository($c['orm.em']);
    }
];
