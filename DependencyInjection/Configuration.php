<?php

namespace Broz\SoundCloudBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('');

        $rootNode
            ->children()
                ->scalarNode('client_id')->end()
                ->scalarNode('client_secret')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
