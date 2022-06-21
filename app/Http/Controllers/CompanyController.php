<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as CO;

class CompanyController extends Controller
{
    //
    public function index() {
        $data = CO::first()->get();

        return view('pages.profile')->with([
            'data' => $data,
            'json' => json_encode($data),
            'company' => $data,
        ]);
    }

    public function store(Request $request) {
        $input = $request->all();
        $input['logo'] = $request->file('logo')->store('company-profile');
        CO::create($input);

        return redirect()->route('company-profile');
    }

    public function update(Request $request, $id) {
        
        if ($request->file('logo')) {
            CO::where('id', $id)->update([
                'name' => $request->name,
                'photo' => $request->file('logo')->store('company-profile')
            ]);
        } else {
            CO::where('id', $id)->update([
                'name' => $request->name,
            ]);
        }

        return redirect()->route('company-route');
    }

    
}
