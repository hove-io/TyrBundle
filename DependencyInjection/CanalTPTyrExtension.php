<?php

namespace CanalTP\TyrBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use CanalTP\TyrComponent\VersionChecker;

class CanalTPTyrExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

         // Tyr api parameters
        foreach ($config as $key => $value) {
            $container->setParameter('canal_tp_tyr.tyr_'.$key, $value);
        }

        $container->setDefinition('canal_tp_tyr.api', new Definition(
            VersionChecker::getTyrServiceClassName(),
            array(
                '%canal_tp_tyr.tyr_url%',
                '%canal_tp_tyr.tyr_end_point_id%',
            )
        ));
    }
}
