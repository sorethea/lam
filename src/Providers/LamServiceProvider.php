<?php

namespace Sorethea\Lam\Providers;

use Illuminate\Support\ServiceProvider;
use Sorethea\Lam\Commands\AuthProviderMakeCommand;
use Sorethea\Lam\Commands\CommandMakeCommand;
use Sorethea\Lam\Commands\ComponentClassMakeCommand;
use Sorethea\Lam\Commands\ComponentViewMakeCommand;
use Sorethea\Lam\Commands\ControllerMakeCommand;
use Sorethea\Lam\Commands\DisableCommand;
use Sorethea\Lam\Commands\DumpCommand;
use Sorethea\Lam\Commands\EnableCommand;
use Sorethea\Lam\Commands\EventMakeCommand;
use Sorethea\Lam\Commands\FactoryMakeCommand;
use Sorethea\Lam\Commands\InstallCommand;
use Sorethea\Lam\Commands\ModuleDeleteCommand;
use Sorethea\Lam\Commands\ModuleMakeCommand;
use Sorethea\Lam\Commands\FilamentPageMakeCommand;
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
            CommandMakeCommand::class,
            ComponentClassMakeCommand::class,
            ComponentViewMakeCommand::class,
            ControllerMakeCommand::class,
            DisableCommand::class,
            DumpCommand::class,
            EnableCommand::class,
            EventMakeCommand::class,
            FactoryMakeCommand::class,
            InstallCommand::class,
            ProviderMakeCommand::class,
            ModuleMakeCommand::class,
            AuthProviderMakeCommand::class,
            ResourceProviderMakeCommand::class,
            ResourceMakeCommand::class,
            FilamentPageMakeCommand::class,
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
