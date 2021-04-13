<?php

namespace Gekomod\FilesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollectionInterface;
use Symfony\Component\Routing\Annotation\Route;

final class FilesAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = 'files';
    protected $baseRouteName = 'files';

    protected function configureRoutes(RouteCollectionInterface $collection): void
    {
        $collection->clearExcept(['list']);
        $collection->add('filesfolders', 'filesfolders/{dirs}');
        $collection->add('filesfoldersf', 'filesfoldersf/{dirs}');
    }
}
