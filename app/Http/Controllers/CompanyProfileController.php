<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    //
    public function about()
    {
        return view('pages.about', []);
    }
    public function visi()
    {
        return view('pages.about', []);
    }
    public function home()
    {
        $data = CompanyProfile::all();
        return view('pages.home', [
            'data' => $data,
        ]);
    }
}
