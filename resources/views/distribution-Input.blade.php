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
                <form action="{{ route('distributionCreate') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="waktu_pengiriman">Waktu Pengiriman</label>
                        <input type="date" name="waktu_pengiriman" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pengiriman">Alamat Pengiriman</label>
                        <textarea name="alamat_pengiriman" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_pengiriman">Jumlah Pengiriman</label>
                        <input type="number" name="jumlah_pengiriman" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_kendaraan_pengirim">Jumlah Kendaraan Pengirim</label>
                        <input type="number" name="jumlah_kendaraan_pengirim" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="plat_nopol">Plat Nomor Kendaraan</label>
                        <input type="text" name="plat_nopol" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_driver">Nama Driver</label>
                        <input type="text" name="nama_driver" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Status Pengiriman</label><br>
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    <input type="radio" name="status_pengiriman" value="Belum Dikirim" required> <label
                                        for=""
                                        style="padding: 5px; background: #DC3545; color: white; border-radius: 5px;">Belum
                                        Dikirim</label>
                                </td>
                                <td><input type="radio" name="status_pengiriman" value="Sedang Dikirim" required> <label
                                        for=""
                                        style="padding: 5px; background: #FFC107; color: white; border-radius: 5px;">Sedang
                                        Dikirim</label>
                                </td>
                                <td>
                                    <input type="radio" name="status_pengiriman" value="Selesai Dikirim" required> <label
                                        for=""
                                        style="padding: 5px; background: #28A745; color: white; border-radius: 5px;">Selesai
                                        Dikirim</label>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
