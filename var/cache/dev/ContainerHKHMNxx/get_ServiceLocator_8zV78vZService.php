<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8zV78vZ' shared service.

return $this->privates['.service_locator.8zV78vZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'order' => ['privates', '.errored..service_locator.8zV78vZ.App\\Entity\\Orders', NULL, 'Cannot autowire service ".service_locator.8zV78vZ": it references class "App\\Entity\\Orders" but no such service exists.'],
], [
    'order' => 'App\\Entity\\Orders',
]);
