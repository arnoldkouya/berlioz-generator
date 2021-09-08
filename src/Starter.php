<?php
declare(strict_types=1);

namespace Berlioz\Generator\Command;

use Berlioz\Generator\Command\Functions\ControllerGenerator;
use Berlioz\Generator\Command\Functions\EntityGenerator;
use Berlioz\Generator\Command\Functions\RepositoryGenerator;
use Berlioz\Generator\Command\Functions\ServiceGenerator;
use Berlioz\Generator\Command\Functions\ViewGenerator;

class Starter
{
    public function choiceMake($choice)
    {
        switch ($choice) {
            case 1:
                $entity = new EntityGenerator();
               // $entity->entityGenerator();
                break;
            case 2:
                $repository = new RepositoryGenerator();
               // $repository->repositoryGenerator();
                break;
            case 3:
                $controller = new ControllerGenerator();
                $controller->controllerGenerator();
                break;
            case 4:
                $view = new ViewGenerator();
                //$view->viewGenerator();
                break;
            case 5:
                $service = new ServiceGenerator();
                $service->serviceGeneratorStart();
                break;
        }
    }
}