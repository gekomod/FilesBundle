<?php

namespace Gekomod\FilesBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class FilesCRUDController extends CRUDController
{
    public function listAction()
    {
        return $this->renderWithExtraParams('admin/index.html.twig');
    }
}
