<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use RakibDevs\Covid19\Covid19;

class Covid19Controller extends Controller
{
    public function show() 
    {
        $wt = new Covid19();
        // $info = $wt->getAllCountries();
        echo '台灣目前數據' . PHP_EOL;
        $info = $wt->getHistory('Taiwan', Carbon::now()->toDateString());
        $response = $info->response[0];
        echo '人口總數：' . $response->population . PHP_EOL;
        echo '病例總數：' . $response->cases->total . PHP_EOL;
        echo '康復人數：' . $response->cases->recovered . PHP_EOL;
        echo '死亡人數：' . $response->deaths->total . PHP_EOL;
    }
}
