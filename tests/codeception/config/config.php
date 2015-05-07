<?php
/**
 * Application configuration shared by all test types
 */
return [
    'components' => [
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'enableCsrfValidation' => false,
        ],
    ],
];
