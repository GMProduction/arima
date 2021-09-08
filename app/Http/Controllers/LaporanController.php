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


    public function cetakLaporan($id)
    {
//        return $this->dataLaporan();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataLaporan($id))->setPaper('f4', 'landscape');

        return $pdf->stream();
    }

    public function dataLaporan($id)
    {
        $idBarang = $id;
        
        // $data = Penjualan::get();

        $data = Penjualan::with(['prediksi', 'barang'])->when($idBarang, function ($query) use ($idBarang){
            if($idBarang !== ""){
                return $query->where('barang_id', '=', $idBarang);
            }
        })->get();

        // dd($data);

        // $pesanan = $this->getPesanan($start, $end);
        // $total   = Pesanan::where('status_pesanan', '=', 4);
        // if ($start) {
        //     $total = $total->whereBetween('tanggal_pesanan', [date('Y-m-d 00:00:00', strtotime($start)), date('Y-m-d 23:59:59', strtotime($end))]);
        // }
        // $total = $total->sum('total_harga');
        // $data = [
        //     'start' => \request('start'),
        //     'end' => \request('end'),
        //     'data' => $pesanan,
        //     'total' => $total
        // ];

        return view('admin/laporan/cetaklaporan')->with(["data"=>$data]);
        // return view('admin/laporan/cetaklaporan');
    }
}
