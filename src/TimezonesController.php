<?php

namespace Besingamkb\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezoneController {
    public function index($timezone = NULL) {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }
}