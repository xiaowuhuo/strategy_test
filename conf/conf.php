<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午7:54
 */
return [
    'strategy' => [
        'strategy\v1',
        'strategy\v2'
    ],
    'flow_version' => [
        'flow\A' => 'v1.0.1',
        'flow\B' => 'v1.0.1',
        'flow\C' => 'v1.0.0',
        'flow\D' => 'v1.0.1',
    ],
    'flow' => [
        'strategy\v1' => [
            'flow\B',
            'flow\C',
            'flow\D',
            'flow\A'
        ],
        'strategy\v2' => [
            'flow\D',
            'flow\C'
        ]
    ]
];