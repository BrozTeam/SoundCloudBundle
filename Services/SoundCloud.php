<?php

namespace Broz\SoundCloudBundle\Services;

use Soundcloud\Exception\InvalidHttpResponseCodeException;
use Soundcloud\Service as IseSoundCloud;

class SoundCloud extends IseSoundCloud {
    public function __construct($config) {
        parent::__construct($config['client_id'], $config['client_secret']);
    }

    public function getTrackById($trackId) {
        try {
            return json_decode($this->get('tracks/' . $trackId), true);
        }
        catch (InvalidHttpResponseCodeException $e) {
            throw new \RuntimeException(sprintf('Could not find track with id %s', $trackId), 0, $e);
        }
    }
}
