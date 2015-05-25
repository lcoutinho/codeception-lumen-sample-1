<?php
/**
 * Class        AppRouteList
 *
 * @author      http://www.appzcoder.com/
 * @date        5/1/15
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class AppRouteList
 *
 * Lists all routes in the system.  Included by default in Laravel but missing
 * from Lumen.
 *
 * @link http://www.appzcoder.com/php/lumen-route-list/
 */
class AppRouteList extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'route:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display all registered routes.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        global $app;
        $routeCollection = $app->getRoutes();

        $rows = array();
        $x = 0;
        foreach ($routeCollection as $route) {
            if (!empty($route['action']['uses'])) {
                $data = $route['action']['uses'];
                if (($pos = strpos($data, "@")) !== false) {
                    $action = substr($data, $pos+1);
                }
            } else {
                $action = 'Closure func';
            }
            $rows[$x]['verb'] = $route['method'];
            $rows[$x]['path'] = $route['uri'];
            $rows[$x]['action'] = $action;
            $x++;
        }

        $headers = array( 'Verb', 'Path', 'Action' );
        $this->table($headers, $rows);
    }
}
