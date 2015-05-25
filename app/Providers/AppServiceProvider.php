<?php
/**
 * Class        AppServiceProvider
 *
 * @author      Provided by Lumen
 * @date        5/1/15
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\AppRouteList;

/**
 * Class AppServiceProvider
 *
 * We register the few services in one place because we are lazy
 * and it's faster and easier.
 *
 * @see App\Console\Commands\AppRouteList
 */
class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.routes.list', function () {
            return new AppRouteList;
        });

        $this->commands(
            'command.routes.list'
        );
    }
}
