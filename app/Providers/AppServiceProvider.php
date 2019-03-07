<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Método que boota em todo o sistemas
     *
     * @return void
     */
    public function boot()
    {
        //Para evitar que colunas unicas das tabelas tenham no máximo 191
        Schema::defaultStringLength(191);
    }

    /**
     * Registros de aplicações e serviços.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
