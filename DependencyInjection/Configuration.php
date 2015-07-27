<?php

namespace CanalTP\TyrBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('canal_tp_tyr');

        $rootNode
            ->children()

            // Tyr api access
            ->scalarNode('url')
                ->defaultValue('http://tyr.dev.canaltp.fr/v0/')
            ->end()
            ->scalarNode('end_point_id')
                ->defaultValue(2)
            ->end()
            ->scalarNode('app_name')
                ->defaultValue('sncf')
            ->end()
        ;

        return $treeBuilder;
    }
}
