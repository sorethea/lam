<?php

namespace Sorethea\Lam\Providers;

use Illuminate\Support\ServiceProvider;
use Sorethea\Lam\Commands\AuthProviderMakeCommand;
use Sorethea\Lam\Commands\ModuleDeleteCommand;
use Sorethea\Lam\Commands\ModuleMakeCommand;
use Sorethea\Lam\Commands\PageMakeCommand;
use Sorethea\Lam\Commands\ProviderMakeCommand;
use Sorethea\Lam\Commands\ResourceMakeCommand;
use Sorethea\Lam\Commands\ResourceProviderMakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LamServiceProvider extends PackageServiceProvider
{

    public function register()
    {
        $this->commands([
            ProviderMakeCommand::class,
            ModuleMakeCommand::class,
            AuthProviderMakeCommand::class,
            ResourceProviderMakeCommand::class,
            ResourceMakeCommand::class,
            PageMakeCommand::class,
            ModuleDeleteCommand::class,
        ]);
    }

    public function boot()
    {
    }

    public function configurePackage(Package $package): void
    {
        $package->name("lam")
            ->hasConfigFile(["lam","modules"]);
    }
}
