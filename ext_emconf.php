<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "openimmo"
 *
 * Auto generated by Extension Builder 2019-02-06
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'openimmo',
    'description'      => 'Display OpenImmo data on a website',
    'category'         => 'plugin',
    'author'           => 'Michael',
    'author_email'     => 'mg@ujamii.com',
    'state'            => 'stable',
    'uploadfolder'     => 1,
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'version'          => '1.0.0',
    'constraints'      => [
        'depends'   => [
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
    'autoload'         =>
        [
            'psr-4' =>
                [
                    'Ujamii\\OpenImmoTypo3\\' => 'Classes'
                ]
        ]
];
