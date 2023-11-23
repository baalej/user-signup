<?php

return [
  'debug' => true,
  // other settings
  'email' => [
    // see https://getkirby.com/docs/guide/emails#transport-configuration
    'transport' => [
      'type' => 'smtp',
      'host' => 'localhost',
      'port' => 1025,
      'security' => false
    ]
  ],
  // see https://getkirby.com/docs/reference/system/options/auth#login-methods
  'auth' => [
    'methods' => ['password', 'code']
  ],
  'routes' => [
    [
      'pattern' => 'logout',
      'action'  => function() {
        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');

      }
    ]
  ],
];