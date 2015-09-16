<?php

return [
    'plugin' => [
        'name' => 'Error logger',
        'description' => 'Zasílání chyb na e-mail, HipChat, Mandrill, NewRelic, Slack, Syslog, a další.'
    ],
    'settings' => [
        'label' => 'Error logger',
        'description' => 'Nastavení služeb, e-mailů a API klíčů.',
    ],

    'nativemailer' => [
        'tab' => [
            'label' => 'E-mail'
        ],
        'enabled' => [
            'label' => 'Zapnout e-mailové notifikace'
        ],
        'email' => [
            'label' => 'E-mail vývojáře',
            'comment' => 'E-mail na který budou chodit chyby a notifikace'
        ],
        'level' => [
            'label' => 'Úroveň logování',
            'comment' => 'Minimální úroveň logování která bude zachycena a odeslána na e-mail'
        ],
        'debug' => [
            'label' => 'Vypnout při debugování',
            'comment' => 'E-mailové notifikace se vypnout, pokud je nastaven parametr aplikace debug na true'
        ]
    ]
];
