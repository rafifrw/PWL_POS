@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-title">{{ $page->title }}</div>
            <div class="card-tools">
                <!-- Tombol Import Detail Penjualan -->
                <button onclick="modalAction('{{ url('/penjualan_detail/import') }}')" class="btn btn-info">Import Detail Penjualan</button>
                
                <!-- Tombol Export Excel -->
                <a href="{{ url('/penjualan_detail/export_excel') }}" class="btn btn-primary">
                    <i class="fa fa-fileexcel"></i> Export Detail Penjualan
                </a>
                
                <!-- Tombol Export PDF -->
                <a href="{{ url('/penjualan_detail/export_pdf') }}" class="btn btn-warning">
                    <i class="fa fa-filepdf"></i> Export Detail Penjualan
                </a>
                
                <!-- Tombol Tambah Data (Ajax) -->
                <button onclick="modalAction('{{ url('/penjualan_detail/create_ajax') }}')" class="btn btn-success">Tambah Data (Ajax)</button>
            </div>
        </div>
        
        <div class="card-body">
            <!-- Alert untuk sukses atau error -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            <!-- Tabel untuk data detail penjualan -->
            <div class="row"></div>
            <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penjualan ID</th>
                        <th>Barang ID</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

<!-- Modal container -->
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true"></div>

@push('css')
@endpush

@push('js')
    <script>
        // Fungsi untuk membuka modal dan mengisi kontennya
        function modalAction(url = '') {
            // Bersihkan isi modal sebelum menampilkan konten baru
            $('#myModal').html(''); 
            
            // Load konten ke dalam modal dari URL yang diberikan
            $('#myModal').load(url, function() {
                $('#myModal').modal('show'); // Tampilkan modal
            });
        }

        // Konfigurasi DataTable
        var dataUser;
        $(document).ready(function() {
            dataUser = $('#table_user').DataTable({
                // serverSide: true, jika ingin menggunakan server side processing
                serverSide: true,
                ajax: {
                    "url": "{{ url('penjualan_detail/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.barang_id = $('#barang_id').val(); // Contoh data tambahan (jika ada)
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        width: "5%",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "penjualan_id",
                        className: "",
                        width: "10%",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: "barang.barang_id",
                        className: "",
                        width: "37%",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: "harga",
                        className: "",
                        width: "14%",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: "jumlah",
                        className: "",
                        width: "14%",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: "aksi",
                        className: "",
                        width: "14%",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            
            // Reload DataTable saat level diubah (jika ada filter tambahan)
            $('#level_id').on('change', function() {
                dataUser.ajax.reload();
            });
        });
    </script>
@endpush
