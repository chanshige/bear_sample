<?php

namespace Chanshige\BearApp\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Resource\Module\JsonSchemaModule;
use josegonzalez\Dotenv\Loader;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $appDir = $this->appMeta->appDir;
        $env = $appDir . '/.env';
        if (file_exists($env)) {
            (new Loader($env))->parse()->putenv(true);
        }
        $this->install(new PackageModule);
        $this->install(new JsonSchemaModule(
            $appDir . '/var/json_schema',
            $appDir . '/var/json_validate'
        ));
    }
}
