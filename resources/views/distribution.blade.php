@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Distribusi</li>
        </ol>
    </nav>
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Data Distribusi</h5>
            <div class="card-body">
                <a href="{{ route('distributionInput') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data</a>
                <br>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table" id="tabel-data">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Waktu Pengiriman</th>
                            <th scope="col">Alamat Pengiriman</th>
                            <th scope="col">Jumlah Pengiriman</th>
                            <th scope="col">Jumlah Kendaraan Pengirim</th>
                            <th scope="col">Plat Nomor</th>
                            <th scope="col">Nama Driver</th>
                            <th scope="col">Status Pengiriman</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $row->waktu_pengiriman }}</td>
                                <td>{{ $row->alamat_pengiriman }}</td>
                                <td>{{ $row->jumlah_pengiriman }}</td>
                                <td>{{ $row->jumlah_kendaraan_pengirim }}</td>
                                <td>
                                    <p class="text-danger">{{ $row->plat_nopol }}</p>
                                </td>
                                <td>{{ $row->nama_driver }}</td>
                                <td>
                                    @if ($row->status_pengiriman === 'Belum Dikirim')
                                        <label for=""
                                            style="padding: 5px; background: #DC3545; color: white; border-radius: 5px;">{{ $row->status_pengiriman }}</label>
                                    @elseif ($row->status_pengiriman === 'Sedang Dikirim')
                                        <label for=""
                                            style="padding: 5px; background: #FFC107; color: white; border-radius: 5px;">{{ $row->status_pengiriman }}</label>
                                    @elseif ($row->status_pengiriman === 'Selesai Dikirim')
                                        <label for=""
                                            style="padding: 5px; background: #28A745; color: white; border-radius: 5px;">{{ $row->status_pengiriman }}</label>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('distributionUpdate', ['id' => $row->id]) }}"
                                        class="btn btn-info btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('distributionDelete', ['id' => $row->id]) }}"
                                        class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                    {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModal">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
