<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.hGXQjZV' shared service.

return $this->privates['.service_locator.hGXQjZV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'image' => ['privates', '.errored..service_locator.hGXQjZV.App\\Entity\\Image', NULL, 'Cannot autowire service ".service_locator.hGXQjZV": it references class "App\\Entity\\Image" but no such service exists.'],
], [
    'image' => 'App\\Entity\\Image',
]);
