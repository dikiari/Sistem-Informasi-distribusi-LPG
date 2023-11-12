@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Vendor</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendor Input</li>
        </ol>
    </nav>
    <div class="container my-3">
        <div class="card shadow-lg">
            <h5 class="card-header">Input Vendor</h5>
            <div class="card-body">
                <form action="{{ route('vendorCreate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Vendor</label>
                        <input type="text" name="nama_vendor" required class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Vendor">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="alamatVendor">Nomor Kontak Vendor</label>
                        <input type="number" name="nomor_kontak_vendor" required class="form-control" id="alamatVendor"
                            placeholder="08*******">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="orderSuply">Order Suply / Bulan</label>
                        <input type="number" name="order_suply_per_bulan" required class="form-control" id="orderSuply"
                            placeholder="1 / 2 /3 / ....">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="alamatVendor">Alamat Lengkap Vendor</label>
                        <textarea class="form-control" name="alamat_vendor" required id="alamatVendor" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
