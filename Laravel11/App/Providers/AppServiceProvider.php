<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    // ...

    public function map()
    {
        $this->mapWebRoutes();

        $this->mapApiRoutes();

        //
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace('App\Http\Controllers') // Make sure this line is present
             ->group(base_path('routes/web.php'));
    }

    // ...
}
