<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

function DateFormat_Fr($date)
{
    $monthFr = '';
    $dt = new DateTime();
    //$date = $dt->format('Y-m-d');

    $month = substr($s1 = substr($date, strpos($date, '-') + 1), 0, - (strlen($s1) - strpos($s1, "-")));
    $day = substr($s1, strpos($s1, '-') + 1);
    $year = substr($date, 0, strpos($date, '-'));

    switch ($month) {
        case '01':
            $monthFr = $day . " Janvier " . $year;
            break;
        case '02':
            $monthFr = $day . " Février " . $year;
            break;
        case '03':
            $monthFr = $day . " Mars " . $year;
            break;
        case '04':
            $monthFr = $day . " Avril " . $year;
            break;
        case '05':
            $monthFr = $day . " Mai " . $year;
            break;
        case '06':
            $monthFr = $day . " Juin " . $year;
            break;
        case '07':
            $monthFr = $day . " Juillet " . $year;
            break;
        case '08':
            $monthFr = $day . " Août " . $year;
            break;
        case '09':
            $monthFr = $day . " Septembre " . $year;
            break;
        case '10':
            $monthFr = $day . " Octobre " . $year;
            break;
        case 'novembre':
        case '11':
            $monthFr = $day . " Novembre " . $year;
            break;
        case '12':
            $monthFr = $day . " Décembre " . $year;
            break;

    }

    return $monthFr;
}
