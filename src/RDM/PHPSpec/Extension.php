<?php

namespace RDM\PHPSpec;

use PhpSpec\ServiceContainer;
use ExtensionInterface;

class Extension implements ExtensionInterface {

    public function load(ServiceContainer $container) {
        $this->setupLocators($container);
    }

    private function setupLocators(\PhpSpec\ServiceContainer $container) {
        $locatorAssembler = new LocatorAssembler();
        $locatorAssembler->build($container);
    }

}