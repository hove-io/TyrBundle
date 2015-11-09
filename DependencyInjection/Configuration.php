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
            ->scalarNode('url')->isRequired()->end()
            ->scalarNode('end_point_id')->end()
        ;

        return $treeBuilder;
    }
}
