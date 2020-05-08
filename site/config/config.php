<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */

use Kirby\Http\Response;

return [
    'debug' => true,
    'routes' => [
        [
            'pattern' => 'send-contact',
            'method' => 'POST',
            'action'  => function () {
                if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['to'])){
                    try {
                      mail($_POST['to'], $_POST['subject'], 'Message from: '.$_POST['email'].PHP_EOL.$_POST['message'], 'From: '.'contact@bemo.dkw.im');
                            return '<html>
                                <body style="text-align: center">
                                    Successfull Send!
                                    <a href="/">Go to HomePage</a>
                                </body>
                           </html>';
                    } catch (Exception $error) {
                      return '<html>
                                <body style="text-align: center">
                                    '.$error.'
                                    <a href="/">Go to HomePage</a>
                                </body>
                           </html>';
                    }
                }else{
                    return '<html>
                                <body style="text-align: center">
                                    Some error occurred!
                                    <a href="/">Go to HomePage</a>
                                </body>
                           </html>';
                }
            }
        ]
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'host.can-eros.com',
            'port' => 465,
            'security' => 'tls',
            'auth' => true,
            'username' => 'contact@bemo.dkw.im',
            'password' => '4H4NPP01bLUj',
        ]
    ]
];

