<?php

namespace Gekomod\FilesBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('gekomod_files');

        $rootNode
            ->children()
                ->scalarNode('web_dir')
                    ->defaultValue('web')
                ->end()
                ->arrayNode('conf')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('dir')->end()
                            ->enumNode('type')->values(['file', 'image', 'media'])->defaultValue('file')->end()
                            ->booleanNode('tree')->end()
                            ->enumNode('view')->values(['thumbnail', 'list'])->defaultValue('list')->end()
                            ->scalarNode('regex')->end()
                            ->scalarNode('service')->end()
                            ->scalarNode('accept')->end()
                            ->arrayNode('upload')
                                ->children()
                                    ->integerNode('min_file_size')->end()
                                    ->integerNode('max_file_size')->end()
                                    ->integerNode('max_width')->end()
                                    ->integerNode('max_height')->end()
                                    ->integerNode('min_width')->end()
                                    ->integerNode('min_height')->end()
                                    ->integerNode('image_library')->end()
                                    ->arrayNode('image_versions')
                                        ->prototype('array')
                                            ->children()
                                                ->booleanNode('auto_orient')->end()
                                                ->booleanNode('crop')->end()
                                                ->integerNode('max_width')->end()
                                                ->integerNode('max_height')->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}