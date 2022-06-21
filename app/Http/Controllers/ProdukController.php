<?php

namespace App\Http\Controllers;

use App\Models\Produk as PD;
use App\Models\Company as CO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class ProdukController extends Controller
{
    //
    public function products()
    {
        $products = PD::all();
        $company = CO::first()->get();
        return view('pages/products', [
            'products' => $products,
            'json' => json_encode($products),
            'company' => $company
        ]); 
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        PD::insert([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'photo' => $request->file('image')->store('product-image')
        ]);

        return redirect()->route('products');
    }

    

    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            PD::where('id', $id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
                'photo' => $request->file('image')->store('product-image')
            ]);
        } else {
            PD::where('id', $id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
            ]);
        }

        return redirect()->route('products');

    }
    public function delete($id)
    {
        $produk = PD::find($id);

        $produk->delete();
        return redirect()->route('products');

    }
}
