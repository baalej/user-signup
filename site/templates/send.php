<?php

$kirby->email([
    // 'template' => 'email',
    'from'     => 'yourcontactform@yourcompany.com',
    'to'       => 'abample@gmail.com',
    'subject'  => 'Let us test if MailHog works',
    'body'     => [
      'text'   => 'TESTING',
    ]
]);