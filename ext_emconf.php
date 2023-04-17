<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Jobcenter',
    'description' => 'Recommend employer contacts based on conditions',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '3.2.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.36-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
