<?php

namespace App\Providers;

use App\Repositories\BlockRepository;
use App\Repositories\BlockRepositoryInterface;
use App\Repositories\DomainRepositoryInterface;
use App\Repositories\DomainRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        $this->app->bind(DomainRepositoryInterface::class, DomainRepository::class);
        $this->app->bind(BlockRepositoryInterface::class, BlockRepository::class);
    }


    public function boot()
    {
        // Configurações de inicialização
    }
}
