@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Input</li>
        </ol>
    </nav>
    <div class="container my-3">
        <div class="card shadow-lg">
            <h5 class="card-header">Input User</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('userCreate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama User</label>
                        <input type="text" name="name" required class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama User">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" required class="form-control" id="email"
                            placeholder="ex@example.com">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control" id="password" placeholder="******">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" required class="form-control" id="password_confirmation" placeholder="******">
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
