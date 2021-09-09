<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Recent Content Widget',
    'description' => 'A widget for the dashboard to display new and recently updated content elements.',
    'category' => 'be',
    'author' => 'Epixskill',
    'author_email' => 'typo3@epixskill.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.19-11.4.99',
            'backend' => '10.4.19-11.4.99',
            'dashboard' => '10.4.19-11.4.99',
            'fluid' => '10.4.19-11.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
