<?php

namespace Broz\SoundCloudBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class BrozSoundCloudExtension extends ConfigurableExtension {
    /**
     * Load the bundle configuration
     *
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function loadInternal(array $configs, ContainerBuilder $container) {
    }
}
