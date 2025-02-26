<?php

/** --------------------------------------------------------------------------------
 * [NOTES Aug 2022]
 *   - The provider must run before all other servive providers in (config/app.php)
 *
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Providers;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Log;

class UpdateServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {

        //do not run this if setup has not completed
        if (env('SETUP_STATUS') != 'COMPLETED') {
            //skip this provider
            return;
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
