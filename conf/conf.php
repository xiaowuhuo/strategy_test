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
    'flow' => [
        'strategy\v1' => [
            'flow\D',
            'flow\B',
            'flow\C',
            'flow\A'
        ],
        'strategy\v2' => [
            'flow\D',
            'flow\C'
        ]
    ]
];