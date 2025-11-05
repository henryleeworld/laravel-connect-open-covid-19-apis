<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use RakibDevs\Covid19\Covid19;

class Covid19Controller extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        $wt = new Covid19();
        // $info = $wt->getAllCountries();
        echo __('Taiwan\'s current data') . PHP_EOL;
        $info = $wt->getHistory('Taiwan', Carbon::now()->toDateString());
        $response = $info->response[0];
        echo __('Total population:') . $response->population . PHP_EOL;
        echo __('Total cases:') . $response->cases->total . PHP_EOL;
        echo __('Number of people who have recovered:') . $response->cases->recovered . PHP_EOL;
        echo __('Deaths:') . $response->deaths->total . PHP_EOL;
    }
}
