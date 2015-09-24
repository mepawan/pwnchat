<?php
$config = array(
    'port'              => 8080,
    'debug'             => false,
    'allowedOrigins'    => null,
    'IpBlackList'       => null,
    'authAdapter'       => 'MgRTC\Session\AuthSimple',
    'facebook'          => array(
        'appId'         => '251017698383358',
        'secret'        => '0ee6bd094ef97478417ef9602232524d'
    ),
    'wordpress'         => array(
        'dir'           => '/data/projects/magnoliyan/rtc/trunk/source/client/demos/wordpress'
    ),
    'operators'         => null,
    'allowDuplicates'   => true,
    'rooms'             => array(
        1   => array(
            'authAdapter'   => 'MgRTC\Session\AuthSimple',
        ),
        2   => array(
            'authAdapter'   => 'MgRTC\Session\AuthFacebook',
        ),
        3   => array(
            'authAdapter'   => 'MgRTC\Session\AuthWordpress',
        )
    )
);
