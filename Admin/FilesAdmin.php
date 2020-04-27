<?php

namespace Gekomod\FilesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Routing\Annotation\Route;

final class FilesAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = 'files';
    protected $baseRouteName = 'files';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['list']);
        $collection->add('filesfolders', 'filesfolders/{dirs}');
        $collection->add('filesfoldersf', 'filesfoldersf/{dirs}');
    }
}