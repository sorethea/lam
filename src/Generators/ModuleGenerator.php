<?php

namespace Sorethea\Lam\Generators;

use Nwidart\Modules\Generators\ModuleGenerator as Generator;
use Nwidart\Modules\Support\Config\GenerateConfigReader;

class ModuleGenerator extends Generator
{
public function generateResources()
{
    parent::generateResources();
    if (GenerateConfigReader::read('provider')->generate() === true) {
        $this->console->call('make:lam-auth-provider', [
            'module' => $this->getName(),
        ]);
        $this->console->call('make:lam-resource-provider', [
            'module' => $this->getName(),
        ]);
    }
}
}
