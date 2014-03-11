<?php

namespace CanalTP\MttBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class CanalTPMttExtension extends Extension implements ExtensionInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
// die('test');
        $loader->load('services.yml');
        $loader->load('layouts.yml');
        $loader->load('blocks.yml');
        // $container->registerExtension($this);
        // $container->prependExtensionConfig('CanalTPMethExtension', array());
    }

    // public function getAlias()
    // {
        // return 'canal_tp_mtt';
    // }
}