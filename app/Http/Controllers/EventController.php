<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as CO;

class EventController extends Controller
{
    //
    public function events()
    {
        $company = CO::first()->get();
        return view('pages/events')->with('company', $company);
    }
}
