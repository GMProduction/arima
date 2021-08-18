<?php


namespace App\Http\Controllers;


use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class LaporanController
{

    public function index()
    {
        $data = Penjualan::with(['prediksi', 'barang'])->get();
        $barang = Barang::all();
        return view('admin/laporan/laporan')->with(['data'=> $data, 'barang' => $barang]);
    }

    public function getDataPenjualan(Request $request)
    {
        try {
            $idBarang = $request->query->get('id');
            $data = Penjualan::with(['prediksi', 'barang'])->when($idBarang, function ($query) use ($idBarang){
                if($idBarang !== ""){
                    return $query->where('barang_id', '=', $idBarang);
                }
            })->get();
            return response()->json($data, 200);
        }catch (\Exception $e){
            return response()->json('Error '.$e, 200);
        }
    }
}
