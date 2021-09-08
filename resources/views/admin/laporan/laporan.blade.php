@extends('admin.base')

@section('title')
    Laporan
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
                <h5>Laporan</h5>
                <div class="d-flex">
                    <select id="daftar_barang" class="form-select"
                            aria-label="Default select example" name="barang">
                        <option value="" selected>Pilih Barang</option>
                        @foreach($barang as $v)
                            <option value="{{ $v->id }}">{{ $v->nama }}</option>
                        @endforeach
                    </select>
                    <a class="btn btn-primary btn-sm ms-2" href="/cetaklaporan/1">Cetak
                </a>
                </div>
            </div>


            <table class="table table-striped table-bordered ">
                <thead>
                <th>
                    #
                </th>
                <th>
                    Nama Barang
                </th>
                <th>
                    Minggu (Penjualan)
                </th>
                <th>
                    Minggu (Prediksi)
                </th>

                <th>
                    Prediksi
                </th>

                <th>
                    Kesalahan
                </th>
                <th>
                    Masuk
                </th>

                <th>
                    Penjualan
                </th>


                </thead>

                <tbody id="table-body">
                @foreach($data as $v)
                    <tr>
                        <td>
                            {{ $loop->index + 1 }}
                        </td>
                        <td>
                            {{ $v->barang->nama }}
                        </td>
                        <td>
                            {{ $v->minggu }}
                        </td>
                        <td>
                            {{ $v->prediksi == null ? '-' : $v->prediksi->minggu  }}
                        </td>
                        <td>
                            {{ $v->prediksi == null ? '-' : $v->prediksi->prediksi  }}
                        </td>
                        <td>
                            {{ $v->prediksi == null ? '-' : $v->prediksi->kesalahan  }}
                        </td>
                        <td>
                            {{ $v->prediksi == null ? '-' : $v->prediksi->masuk  }}
                        </td>
                        <td>
                            {{ $v->qty  }}
                        </td>

                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>


        </div>


    </section>

@endsection

@section('script')
    <script>

        async function getDataPenjualan() {
            $('#table-body').empty();
            try {
                let id = $('#daftar_barang').val();
                let response = await $.get('/admin/laporan/ajax?id=' + id);
                $.each(response, function (k, v) {
                    let mingguPrediksi = v['prediksi'] === null ? '-' : v['prediksi']['minggu'];
                    let prediksi = v['prediksi'] === null ? '-' : v['prediksi']['prediksi'];
                    let kesalahan = v['prediksi'] === null ? '-' : v['prediksi']['kesalahan'];
                    let masuk = v['prediksi'] === null ? '-' : v['prediksi']['masuk'];
                    let el = '<tr>' +
                        '<td> ' + (k + 1) + '</td>' +
                        '<td>' + v['barang']['nama'] + '</td>\n' +
                        '<td>' + v['minggu'] + '</td>\n' +
                        '<td>' + mingguPrediksi + '</td>\n' +
                        '<td>' + prediksi + '</td>\n' +
                        '<td>' + kesalahan + '</td>\n' +
                        '<td>' + masuk + '</td>\n' +
                        '<td>' + v['qty'] + '</td>' +
                        '</tr>';
                    $('#table-body').append(el);
                    console.log(v)
                });

            } catch (e) {
                alert("Gagal Memuat Data Penjualan...")
                console.log(e)
            }
        }

        $(document).ready(function () {
            getDataPenjualan();

            $('#daftar_barang').on('change', function () {
                getDataPenjualan();
            })
        })


    </script>

@endsection
