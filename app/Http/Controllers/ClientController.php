<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as CO;

class ClientController extends Controller
{
    //
    public function clients()
    {   
        $company = CO::first()->get();
        return view('pages/clients')->with('company', $company);
    }
}
