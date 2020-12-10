<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Jobcenter',
    'description' => 'Recommend employer contacts based on conditions',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.18-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
