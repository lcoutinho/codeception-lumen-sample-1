<?php
/**
 * Home Controller
 *
 * @author Mohd Sufiyan
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

/**
 * Home Controller
 *
 * All other methods not fitting in any controllers
 * will be placed here.
 */
class HomeController extends BaseController
{
    /**
     * Hello!
     *
     * @return json
     */
    public function index(Request $request)
    {
        return $app->welcome();
    }
}
