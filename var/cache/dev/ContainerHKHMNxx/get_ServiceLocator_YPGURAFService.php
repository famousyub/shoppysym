<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.yPGURAF' shared service.

return $this->privates['.service_locator.yPGURAF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'orders' => ['privates', '.errored..service_locator.yPGURAF.App\\Entity\\Orders', NULL, 'Cannot autowire service ".service_locator.yPGURAF": it references class "App\\Entity\\Orders" but no such service exists.'],
], [
    'orders' => 'App\\Entity\\Orders',
]);