<?php

namespace Gekomod\FilesBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Response;


class FilesCRUDController extends CRUDController
{
    public function listAction()
    {
        return $this->renderWithExtraParams('@Files/admin/index.html.twig');
    }
    
    public function filesfoldersAction($dirs)
    {
        if($dirs == '*') { $di= "./*"; }  else { 
            $d = str_replace(",","/",$dirs);
            $di = "".$d."/*"; }
        $dirs = glob($di, GLOB_ONLYDIR);
        foreach($dirs as $i){
            $dir = basename($i);
            if($di == "./*") {
                $s = $i;
                echo('<a href="#" data-href="'.$i.'" class="list-group-item" id="folder">
					                        <i class="demo-pli-folder icon-lg icon-fw"></i> '.$dir.'
					                    </a>');
        } else {
            $s = str_replace('/',',',$i);
            echo('<a href="#" data-href="'.$s.'" class="list-group-item" id="folder">
					                        <i class="demo-pli-folder icon-lg icon-fw"></i> '.$dir.'
					                    </a>');
        }
      

            
        }

        return new Response();
    }
    
    function human_filesize($bytes, $decimals = 2) {
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);
        $d = (empty($factor))?0:$decimals;
        return sprintf("%.{$d}f", $bytes / pow(1024, $factor)) . " ". ((!empty($factor))?@$sz[(int)$factor]:"")."o";
    }
    
        public function filesfoldersfAction($dirs)
    {
        if($dirs == '*') { $di= "./*.{*}"; }  else { 
            $d = str_replace(",","/",$dirs);
            $di = "".$d."/*.{*}"; }
        $dirs = glob($di, GLOB_BRACE);
        foreach($dirs as $i){
            $dir = basename($i);
            echo('<!--File list item-->
					                        <li>
					                            <div class="file-control">
					                                <input id="file-list" class="magic-checkbox" value="'.$i.'" data-title="'.$dir.'" type="checkbox">
					                                <label for="file-list-2"></label>
					                            </div>
					                            <div class="file-settings"><a href="#"><i class="pci-ver-dots"></i></a></div>
					                            <div class="file-attach-icon"></div>
					                            <a href="#" class="file-details">
					                                <div class="media-block">
					                                    <div class="media-left"><i class="demo-psi-file"></i></div>
					                                    <div class="media-body">
					                                        <p class="file-name">'.$dir.'</p>
					                                        <small>'. $this->human_filesize(filesize($i)).'</small>
					                                    </div>
					                                </div>
					                            </a>
					                        </li>');
        }

        return new Response();
    }
    
}
