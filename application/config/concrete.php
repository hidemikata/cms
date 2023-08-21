<?php
return [
    'security' => [
        'session' => [
            'invalidate_on_ip_mismatch' => false,
        ],
    ],
    'log' => [
        'configuration' => [
            /*
             * Configuration mode
             *
             * @var string simple|advanced
             */
            'mode' => 'simple',
            'simple' => [
                /*
                 * What log level to store core logs in the database
                 * @var string
                 */
                'core_logging_level' => 'DEBUG',

                /*
                 * Which handle to use
                 *
                 * @var string (database|file)
                 */
                'handler' => 'file',

                'file' => [
                    /*
                     * File path to store logs
                     *
                     * @var string
                     */
                    'file' => '/var/log/concretecms/concretecms.log',
                ],
            ],

        ]
    ]
];
