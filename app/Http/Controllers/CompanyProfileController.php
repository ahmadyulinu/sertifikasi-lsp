<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use App\Models\Company as CO;

class CompanyProfileController extends Controller
{
    //
    public function about()
    {
        $company = CO::first()->get();
        return view('pages.about')->with(
            'company', $company
        );
    }
    public function visi()
    {
        $company = CO::first()->get();
        return view('pages.visi')->with('company', $company);
    }
    public function home()
    {
        $data = CompanyProfile::all();
        $company = CO::first()->get();
        return view('pages.home', [
            'data' => $data,
            'company' => $company
        ]);
    }
}
