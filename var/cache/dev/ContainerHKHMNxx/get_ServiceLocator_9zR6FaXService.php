<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9zR6FaX' shared service.

return $this->privates['.service_locator.9zR6FaX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'comment' => ['privates', '.errored..service_locator.9zR6FaX.App\\Entity\\Admin\\Comment', NULL, 'Cannot autowire service ".service_locator.9zR6FaX": it references class "App\\Entity\\Admin\\Comment" but no such service exists.'],
], [
    'comment' => 'App\\Entity\\Admin\\Comment',
]);
