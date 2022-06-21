<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel as AR;
use App\Models\Company as CO;

class ArtikelController extends Controller
{
    //
    public function artikel()
    {
        $articles = AR::all();
        $company = CO::first()->get();
        return view('pages/artikel', [
            'articles' => $articles,
            'company' => $company
        ]);
    }

    public function show($id) {
        $articles = AR::findOrFail($id);
        return view('pages/detailArtikel', [
            'data' => $articles,
            'json' => json_encode($articles->get())
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['photo'] = $request->file('photo')->store('articles');
        AR::create($input);

        return redirect()->route('artikel');
    }

    

    public function update(Request $request, $id)
    {
        
        $data = AR::findOrFail($id);
        if ($request->file('photo')) {
            $request->file('photo')->store('articles');
        }
        $data->update($request->all());
        

        return redirect()->route('artikel');

    }
    public function delete($id)
    {
        $produk = AR::find($id);

        $produk->delete();
        return redirect()->route('artikel');

    }
}
