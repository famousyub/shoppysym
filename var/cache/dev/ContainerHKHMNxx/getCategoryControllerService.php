<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\CategoryController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Admin/CategoryController.php';

$this->services['App\\Controller\\Admin\\CategoryController'] = $instance = new \App\Controller\Admin\CategoryController();

$instance->setContainer(($this->privates['.service_locator.eENHvGr'] ?? $this->load('get_ServiceLocator_EENHvGrService.php'))->withContext('App\\Controller\\Admin\\CategoryController', $this));

return $instance;