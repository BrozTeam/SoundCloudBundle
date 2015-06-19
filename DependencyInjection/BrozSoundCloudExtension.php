<?php

namespace Broz\SoundCloudBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class BrozSoundCloudExtension extends ConfigurableExtension {
    /**
     * Load the bundle configuration
     *
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function loadInternal(array $configs, ContainerBuilder $container) {
        $container->setParameter('broz_sound_cloud', $configs);

        // Load bundle config files
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
