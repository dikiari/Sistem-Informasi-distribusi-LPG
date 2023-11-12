@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Data Vendor</h6>
                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{$dataVendor}}</span></h2>
                        <a href="{{ route('vendor.index') }}" class="btn btn-light btn-sm"> See All </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Data Distribusi</h6>
                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>{{$dataDistribution}}</span></h2>
                        <a href="{{ route('distributionIndex') }}" class="btn btn-light btn-sm"> See All </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-4">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Data User</h6>
                        <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>{{$dataUser}}</span></h2>
                        <a href="{{ route('userIndex') }}" class="btn btn-light btn-sm"> See All </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
