@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
        </ol>
    </nav>
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Data User</h5>
            <div class="card-body">
                <a href="{{ route('userInput') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Data</a>
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
                            <th scope="col">Nama User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Password</th>
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
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->level }}</td>
                                <td>{{ $row->password }}</td>
                                <td>
                                    <a href="{{ route('userUpdate', ['id' => $row->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('userDelete', ['id' => $row->id]) }}"
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
