<?php

return [
	'plugin' => [
		'name' => 'Error logger',
		'description' => 'Send errors to email, HipChat, Mandrill, NewRelic, Slack, Syslog, and more.'
	],
	'settings' => [
		'label' => 'Error logger',
		'description' => 'Set notification services, e-mails and API keys.',
	],

    'nativemailer' => [
        'tab' => [
            'label' => 'Mailer'
        ],
        'enabled' => [
            'label' => 'Enable email notification'
        ],
        'email' => [
            'label' => 'Developer email',
            'comment' => 'The receiver of the mail with notifications'
        ],
        'level' => [
            'label' => 'Logging level',
            'comment' => 'The minimum logging level at which this handler will be triggered'
        ],
        'debug' => [
            'label' => 'Disable when debug',
            'comment' => 'Sending e-mail will be disabled when debug is true'
        ]
    ]
];
