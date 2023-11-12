@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendor</li>
        </ol>
    </nav>
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Data Vendor</h5>
            <div class="card-body">
                <a href="{{ route('vendorInput') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data</a>
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
                            <th scope="col">Nama Vendor</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Order Suply / Bulan</th>
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
                                <td>{{ $row->nama_vendor }}</td>
                                <td>{{ $row->alamat_vendor }}</td>
                                <td>{{ $row->order_suply_per_bulan }}</td>
                                <td>
                                    <a href="{{ route('vendorUpdate', ['id' => $row->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('vendorDelete', ['id' => $row->id]) }}"
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
