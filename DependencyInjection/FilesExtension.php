<?php

namespace Gekomod\FilesBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Routing\RouteCollection;

class FilesExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
            $loader = new Loader\YamlFileLoader(
                $container,
                new FileLocator(__DIR__.'/../Resources/config')
            );
            $loader->load('services.yaml');
            $loader->load('twig.yaml');

    }
}
