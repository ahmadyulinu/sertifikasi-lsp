<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class ProdukController extends Controller
{
    //
    public function products()
    {
        $products = Produk::all();
        return view('pages/products', [
            'products' => $products,
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        // $file = Input::file($request->image);
        DB::table('produks')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'photo' => $request->file('image')->store('product-image')
        ]);

        return redirect('/products');
    }

    public function edit($id)
    {
        $products = Produk::find($id);
        return view('pages/editProduk', [
            'products' => $products
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            DB::table('produks')->where('id', $id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
                'photo' => $request->file('image')->store('product-image')
            ]);
        } else {
            DB::table('produks')->where('id', $id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
            ]);
        }

        return redirect('/products');
    }
    public function delete($id)
    {
        $produk = Produk::find($id);

        $produk->delete();
        return redirect('products');
    }
}
