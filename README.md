# codeception-lumen-sample

Sample Lumen application with a codeception test, using the codeception-lumen module.

See https://github.com/incube8/codeception-lumen for the module to get codeception
tests working with Lumen.

This doesn't quite work completely yet.  As a more or less basic test there is one working
but I have had to comment out this line:

    $I->seeCurrentActionIs('App\Http\Controllers\HomeController@index');

This is because the Laravel\Lumen\Routing\UrlGenerator class doesn't define an action()
method -- Lumen routing is a cut down version of the Laravel router so there is a lot of
functionality missing or different.

Pull requests gratefully received.
