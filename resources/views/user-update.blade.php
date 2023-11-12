<!-- resources/views/user-edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="card shadow-lg">
            <h5 class="card-header">Edit User</h5>
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
                <form action="{{ route('userUpdateStore', $user->id) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama User</label>
                        <input type="text" name="name" value="{{ $user->name }}" required class="form-control" id="name" placeholder="Nama User">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" required class="form-control" id="email" placeholder="ex@example.com">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
