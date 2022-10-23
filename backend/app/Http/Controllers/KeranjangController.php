<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\User;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function insertToChart(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjang = Keranjang::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'jumlah' => $request->jumlah,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Barang di tambahkan ke keranjang',
            'data' => $keranjang
        ]);
    }

    public function getChart(User $user)
    {
        $keranjang = Keranjang::where('user_id', $user->id)->get();
        return response()->json($keranjang);
    }

    public function updateChart(Request $request, User $user)
    {
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjang = Keranjang::where('user_id', $user->id)->where('product_id', $request->product_id)->first();
        $keranjang->jumlah = $request->jumlah;
        $keranjang->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Barang di update di keranjang',
            'data' => $keranjang
        ]);
    }

    public function deleteChart($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Barang di hapus dari keranjang',
            'data' => $keranjang
        ]);
    }
}
