@extends('admin.base')

@section('title')
    Data Barang Masuk
@endsection

@section('content')

    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            swal("Berhasil!", "Berhasil Menambah data!", "success");
        </script>
    @endif

    <section class="m-2">

        <div class="table-container">


            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Data Prediksi</h5>
                <button type="button ms-auto" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modalprediksi">Hitung Prediksi Hari Ini</button>
            </div>


            <table class="table table-striped table-bordered ">
                <thead>
                    <th>
                        #
                    </th>
                    <th>
                        Tanggal
                    </th>
                    <th>
                        Nama Barang
                    </th>
                    <th>
                        Hasil Prediksi
                    </th>

                    <th>
                        Tingkat Kesalahan
                    </th>


                    <th>
                        Barang di input
                    </th>

                    <th>
                        Action
                    </th>

                </thead>

                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        15 Agustus 2021
                    </td>
                    <td>
                        Akrilik
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        2
                    </td>

                    <td>
                        10
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#tambahbarang">Masukan</button>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#tambahbarang">Ubah</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus('id', 'nama') ">hapus</button>
                    </td>
                </tr>

            </table>

        </div>

        <div>
            <!-- Modal Prediksi-->
            <div class="modal fade" id="modalprediksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hitung Prediksi tanggal -</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>

                                <div class="mb-3">
                                    <label for="barang" class="form-label">Tanggal</label>
                                    <input type="text" class="form-control datepicker" data-date-end-date="0d">
                                </div>

                                <div class="mb-3">
                                    <label for="barang" class="form-label">Barang</label>
                                    <div class="d-flex">
                                        <select class="form-select" aria-label="Default select example" name="barang">
                                            <option selected>Pilih Barang</option>
                                            <option value="1">Akrilik Bening 5mm</option>
                                            <option value="2">Akrilik Putih 4mm</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="mb-4"></div>
                                <button type="submit" class="btn btn-primary">Hitung</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal Input-->
            <div class="modal fade" id="tambahbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah "Nama Barang"</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>

                                <div class="mb-3">
                                    <label for="hasilPrediksi" class="form-label">Hasil Prediksi</label>
                                    <input type="number" class="form-control" readonly id="hasilPrediksi">
                                </div>

                                <div class="mb-3">
                                    <label for="qty" class="form-label">Qty</label>
                                    <input type="number" class="form-control" id="qty">
                                </div>

                                <div class="mb-4"></div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function() {

        })
        var type = {
            format: "dd-mm-yyyy"
        };

        $('.datepicker').datepicker({"format": type.format,
            "todayHighlight":true
        
        });


        function hapus(id, name) {
            swal({
                    title: "Menghapus data?",
                    text: "Apa kamu yakin, ingin menghapus data ?!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Berhasil Menghapus data!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data belum terhapus");
                    }
                });
        }
    </script>

@endsection
