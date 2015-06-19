<?php

namespace Broz\SoundCloudBundle\Services;


class SoundCloud {
    protected $clientId;
    protected $clientSecret;

    public function __construct($config) {
        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
    }
}

