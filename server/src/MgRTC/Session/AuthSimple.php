<?php

namespace MgRTC\Session;

use MgRTC\Session\AuthInterface;
use Ratchet\ConnectionInterface;

class AuthSimple extends AuthBase implements AuthInterface {

    /**
     * @param ConnectionInterface $conn
     * @param array $cookies
     * @return array
     */
    public function authUser(ConnectionInterface $conn, array $cookies) {
        //$this->debug($cookies);
        if(!isset ($cookies['mgVideoChatSimple']) || !$cookies['mgVideoChatSimple']){
            return null;
        }
        return array(
            'provider'      => 'simple',
            'id'            => $conn->resourceId,
            'email'         => '',
            'name'          => urldecode($cookies['mgVideoChatSimple'])
        );
    }
}