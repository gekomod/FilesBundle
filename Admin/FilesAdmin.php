<?php

namespace Gekomod\FilesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

final class FilesAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = 'custom_view';
    protected $baseRouteName = 'custom_view';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['list']);
    }
}
