<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as CO;

class GalleryController extends Controller
{
    //

    public function gallery()
    {
        $company = CO::first()->get();
        return view('pages/gallery')->with('company', $company);
    }
}
