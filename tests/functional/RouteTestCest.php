<?php
use \FunctionalTester;

class RouteTestCest
{
    public function openHomePageByRoute(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->seeCurrentUrlEquals('/');
        $I->seeCurrentActionIs('App\Http\Controllers\HomeController@index');
    }
}
