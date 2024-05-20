@extends('layouts.app', ['title' => 'Edit User'])

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit User</h6>
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ old('name') ?? $user->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') ?? $user->email }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-2"></i>Simpan</button>
                        <button type="reset" class="btn btn-outline-primary m-2"><i
                                class="fa fa-eraser me-2"></i>Reset</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ubah Password</h6>
                    <form action="{{ route('user.updatePassword', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                value="{{ old('password') }}"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" value="{{ old('password_confirmation') }}"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save me-2"></i>Simpan</button>
                        <button type="reset" class="btn btn-outline-primary m-2"><i
                                class="fa fa-eraser me-2"></i>Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
